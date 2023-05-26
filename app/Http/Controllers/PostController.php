<?php

namespace App\Http\Controllers;

use App\Events\PostCreated;
use App\Http\Requests\StorePostRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except([
            'index','show'
        ]);
    }

    public function index()
    {
        $posts = Post::latest()->paginate(6);
        return view('posts.index')->with('posts',$posts);
    }

    /**
    * Show the form for creating a new resource.
    */
    public function create()
    {
        return view('posts.create')->with([
            'categories' => Category::all(),
            'tags' => Tag::all(),
        ]);
    }

    public function store(StorePostRequest $request)
    {
        if($request->hasFile('photo')){
            $file = $request->file('photo');
            $name = $file->getClientOriginalName();
            $path = $request->file('photo')->storeAs('files',$name);
        }

        $post = Post::create([
            'user_id' => auth()->user()->id,
            'category_id' => $request->category_id,
            'title' => $request->title,
            'short_content' => $request->short_content,
            'content' => $request->content,
            'photo' => $path ?? null
        ]);
        if(isset($request->tags)){
            foreach($request->tags as $tag){
                $post->tags()->attach($tag);
            }
        }

        PostCreated::dispatch($post);

        return redirect()->back();
    }

    /**
    * Display the specified resource.
    */
    public function show(Post $post)
    {
        return view('posts.show')->with([
            'post' => $post,
            'recents_post' => Post::latest()->get()->except($post->id)->take(5),
            'catigories' => Category::all(),
            'tags' => Tag::all(),
        ]);
    }

    /**
    * Show the form for editing the specified resource.
    */
    public function edit(Post $post)
    {
        Gate::authorize('update', $post);

        return view('posts.edit')->with('post', $post);
    }

    /**
    * Update the specified resource in storage.
    */
    public function update(StorePostRequest $request, Post $post)
    {
        Gate::authorize('update', $post);
        if($request->hasFile('photo')){
            if(isset($post->photo)){
                Storage::delete($post->photo);
            }
            $file = $request->file('photo');
            $name = $file->getClientOriginalName();
            $path = $request->file('photo')->storeAs('files',$name);
        }
        $post->update([
            'title' => $request->title,
            'short_content' => $request->short_content,
            'content' => $request->content,
            'photo' => $path ?? $post->photo
        ]);
        return redirect()->route('posts.show',['post'=>$post->id]);
    }

    /**
    * Remove the specified resource from storage.
    */
    public function destroy(Post $post)
    {
        Gate::authorize('delete',$post);
        if(isset($post->photo)){
            Storage::delete($post->photo);
        }
        $post->delete();
        return redirect()->route('posts.index');
    }
}
