<x-layouts.main>

    <x-slot:title>
        Postni o'zgartirish #{{$post->id}}
    </x-slot:title>


    <x-page-header>
        Postni o'zgartirish #{{$post->id}}
    </x-page-header>
    <div class="w-50 d-flex justify-content-end">
        <div class="col-lg-7 mb-5 mb-lg-0">
            <div class="contact-form">
                <form action="{{ route('posts.update',['post'=>$post->id]) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="control-group">
                        <input type="text" class="form-control p-4" name="title" placeholder="Sarlavha" value="{{ $post->title }}"/>
                        @error('title')
                        <p class="help-block text-danger ml-2">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="control-group">
                        <textarea class="form-control p-4 mt-3" rows="2" name="short_content" placeholder="Qisqacha mazmuni">{{ $post->short_content }}</textarea>
                        @error('short_content')
                        <p class="help-block text-danger ml-2">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="control-group">
                        <textarea class="form-control p-4 mt-3" rows="5" name="content" placeholder="Maqola">{{ $post->content }}</textarea>
                        @error('content')
                        <p class="help-block text-danger ml-2">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="control-group">
                        <input type="file" class="mt-3 ml-3" name="photo" value="{{ $post->file }}">
                        @error('photo')
                        <p class="help-block text-danger ml-2">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="flex">
                        <button class="btn btn-primary mt-5 py-3 px-5" type="submit">Saqlash</button>
                        <a href="{{route('posts.show',['post'=>$post->id])}}" class="btn btn-danger mt-5 py-3 px-5">Bekor qilish</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layouts.main>
