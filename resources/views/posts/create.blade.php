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
            <form action="{{ route('posts.store') }}" method="POST">
                @csrf
                <div class="control-group">
                    <input type="text" class="form-control p-4" name="title" placeholder="Sarlavha" required="required"/>
                    <p class="help-block text-danger"></p>
                </div>
                <div class="control-group">
                    <textarea class="form-control p-4" rows="2" name="short_content" placeholder="Qisqacha mazmuni" required="required"></textarea>
                    <p class="help-block text-danger"></p>
                </div>
                <div class="control-group">
                    <textarea class="form-control p-4" rows="5" name="content" placeholder="Maqola" required="required"></textarea>
                    <p class="help-block text-danger"></p>
                </div>
                {{-- <div>
                    <input type="file" name="photo">
                </div> --}}
                <div>
                    <button class="btn btn-primary mt-5 btn-block py-3 px-5" type="submit" id="sendMessageButton">Saqlash</button>
                </div>
            </form>
        </div>
    </div>
</div>
</x-layouts.main>
