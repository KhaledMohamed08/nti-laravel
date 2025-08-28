@extends('layouts.main')
@section('title', 'Show Product')
@section('content')
    <div class="card mx-auto" style="max-width: 600px;">
        <div class="actions mt-4 ms-3">
            {{-- <a href="{{ route('products.edit', $product->id) }}" class="btn btn-success btn-sm"><i class="bi bi-pencil-square"></i></a> --}}
            <x-ui.link-btn class="btn-sm" link="{{ route('products.edit', $product->id) }}" color="success"><i
                    class="bi bi-pencil-square"></i></x-ui.link-btn>
            {{-- <form class="d-inline" action="{{ route('products.delete', $product->id) }}" method="POST">
                @method('DELETE')
                @csrf
                <button onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm"><i class="bi bi-trash3-fill"></i></button>
                <button type="button" onclick="deleteConfirm(this)" class="btn btn-danger btn-sm"><i
                        class="bi bi-trash3-fill"></i></button>
            </form> --}}
            <x-ui.link-btn class="btn-sm" color="danger" method="DELETE"><i class="bi bi-trash3-fill"></i></x-ui.link-btn>
        </div>
        <div class="card-body">
            <h2 class="card-title">{{ $product->title }}</h2>
            <p class="card-text">{{ $product->description }}</p>
            <h4 class="text-primary">${{ $product->price }}</h4>
            <h4 class="text-secondary">Size: {{ $product->size }}</h4>
            <p class="text-secondary">User: <strong>{{ $product->user->name }}</strong></p>
            @if (count($product->colors) > 0)
                <p class="text-secondary">Colors</p>
                <ul class="list-group">
                    @foreach ($product->colors as $color)
                        <li class="list-group-item">{{ $color->name }}</li>
                    @endforeach
                </ul>
            @endif

            <a href="{{ route('products.index') }}" class="btn btn-secondary mt-3">Back to Products</a>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        let deleteConfirm = (button) => {

            const form = button.closest('form')

            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                showCancelButton: true,
                toast: false,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!",
                position: "top",
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        }
    </script>
@endpush
