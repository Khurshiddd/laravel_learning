<x-layouts.main>

    <x-slot:title>
    Xabarnoma
</x-slot:title>


{{-- <x-page-header>
    Xabarnomalar
</x-page-header> --}}

<!-- Blog Start -->



<div class="container-fluid py-5">
    <div class="container">
        @foreach ($notifications as $notification)
        <div class="mb-3 border p-4 rounded">
            @if ($notification->read_at == null)
            <div class="position-relative mb-4">
                <h4 class="font-weight-bold mb-n1">New</h4>
            </div>
            @endif
            <div class="d-flex mb-2">
                <a class="text-danger text-uppercase font-weight-medium">{{ $notification->data['created_at'] }}</a>
            </div>
            <h5 class="font-weight-medium mb-2">{{ $notification->data['title'] }}</h5>
            <p class="mb-4">{{ 'Yangi post yaratildi. id: '.$notification->data['id']}}</p>
            @if ($notification->read_at == null)
            <a class="btn btn-sm btn-primary py-2" href="{{ route('notifications.read',['notification' => $notification->id]) }}">O'qildi</a>
            @endif
        </div>
        @endforeach
    </div>
    {{$notifications->links()}}
</div>
<!-- Blog End -->
</x-layouts.main>
