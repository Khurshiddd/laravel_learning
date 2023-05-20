<x-layouts.main>
    
    <x-slot:title>
    Post yaratish
</x-slot:title>


<x-page-header>
    Post yaratish
</x-page-header>
<div class="w-50 d-flex justify-content-end">
    <div class="col-lg-7 mb-5 mb-lg-0">
        <div class="contact-form">
            <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="control-group">
                    <input type="text" class="form-control p-4" name="title" placeholder="Sarlavha" value="{{ old('title') }}"/>
                    @error('title')
                    <p class="help-block text-danger ml-2">{{$message}}</p>
                    @enderror
                </div>
                <div class="control-group">
                    <textarea class="form-control p-4 mt-3" rows="2" name="short_content" placeholder="Qisqacha mazmuni">{{ old('short_content') }}</textarea>
                    @error('short_content')
                    <p class="help-block text-danger ml-2">{{$message}}</p>
                    @enderror
                </div>
                <div class="control-group">
                    <textarea class="form-control p-4 mt-3" rows="5" name="content" placeholder="Maqola">{{ old('content') }}</textarea>
                    @error('content')
                    <p class="help-block text-danger ml-2">{{$message}}</p>
                    @enderror
                </div>
                <div class="control-group mt-2">
                    <label class="ml-2">Katigoriyalar</label>
                    <select name="category_id" class="form-select form-select-sm p-2 ml-2">
                        @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select><br>
                    {{-- <label>Taglar</label>
                    <select name="category_id" class="form-select form-select-sm p-2 mt-3 ml-2">
                        @foreach ($tags as $tag)
                        <option value="{{$tag->id}}">{{$tag->name}}</option>
                        @endforeach
                    </select> --}}
                </div>
                <div class="control-group ml-2">
                    <label class="form-label select-label">Taglar</label>
                    <select class="select" name="tags[]" multiple>
                        @foreach ($tags as $tag)
                            <option value="{{$tag->id}}">{{$tag->name}}</option>
                        @endforeach
                      </select>
                </div>
                <div class="control-group">
                    <input type="file" class="mt-3 ml-3" name="photo" value="{{ old('file') }}">
                    @error('photo')
                    <p class="help-block text-danger ml-2">{{$message}}</p>
                    @enderror
                </div>
                <div>
                    <button class="btn btn-primary mt-5 btn-block py-3 px-5" type="submit" id="sendMessageButton">Saqlash</button>
                </div>
            </form>
        </div>
    </div>
</div>
</x-layouts.main>
