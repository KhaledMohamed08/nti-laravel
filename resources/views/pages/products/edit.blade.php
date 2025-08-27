@extends('layouts.main')
@section('title', 'Update Product')
@section('content')
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="exampleInputTitle" class="form-label">Product Title</label>
            <input type="text" name="title" value="{{ old('title', $product->title) }}" class="form-control"
                id="exampleInputTitle">
            @error('title')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleFormControlDescription" class="form-label">Product Description</label>
            <textarea class="form-control" name="description" id="exampleFormControlDescription" rows="3">{{ old('description', $product->description) }}</textarea>
            @error('description')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleInputStock" class="form-label">Product Stock</label>
            <input type="number" name="stock" value="{{ old('stock', $product->stock) }}" class="form-control"
                id="exampleInputStock">
            @error('stock')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleInputPrice" class="form-label">Product Price</label>
            <input type="number" name="price" value="{{ old('price', $product->price) }}" class="form-control"
                id="exampleInputPrice">
            @error('price')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <select class="form-select" name="size" aria-label="Default select example">
                <option {{ $product->size === 's' ? 'selected' : '' }} value="s">Small</option>
                <option {{ $product->size === 'm' ? 'selected' : '' }} value="m">Medium</option>
                <option {{ $product->size === 'l' ? 'selected' : '' }} value="l">Large</option>
            </select>
            @error('size')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ route('products.show', $product->id) }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
