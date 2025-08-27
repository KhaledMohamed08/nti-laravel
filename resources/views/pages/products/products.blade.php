@extends('layouts.main')
@section('title', 'Products')
@section('content')
    {{-- <a href="{{ route('products.create') }}" class="btn btn-primary p-2 mb-3">Create New Product</a> --}}
    <x-ui.link-btn class="p-2 mb-3" id="create_product" link="{{ route('products.create') }}">Create New Product</x-ui.link-btn>
    <div class="products d-flex flex-wrap align-items-stretch justify-content-start">
        @foreach ($products as $product)
            <div class="card text-center product-card mb-3 d-flex flex-column" style="width: 18rem;">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">{{ $product->title }}</h5>
                    <p class="card-text">{{ $product->description }}</p>

                    <div class="mt-auto">
                        <h5 class="card-title text-primary">${{ $product->price }}</h5>
                        <p class="text-secondary">User: <strong>{{ $product->user->name }}</strong></p>
                        {{-- <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary mt-2">Product Details</a> --}}
                        <x-ui.link-btn link="{{ route('products.show', $product->id) }}">Product Details</x-ui.link-btn>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

@push('styles')
    <style>
        .products {
            gap: 1rem;
        }

        .product-card {
            width: 18rem;
        }
    </style>
@endpush


{{-- @push('scripts')
    <script>
        alert('hi');
    </script>
@endpush --}}
