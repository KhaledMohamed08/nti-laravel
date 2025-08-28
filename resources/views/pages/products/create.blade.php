@extends('layouts.main')
@section('title', 'Create Product')
@section('content')
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputTitle" class="form-label">Product Title</label>
            <input type="text" name="title" value="{{ old('title') }}" class="form-control" id="exampleInputTitle">
            @error('title')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleFormControlDescription" class="form-label">Product Description</label>
            <textarea class="form-control" name="description" id="exampleFormControlDescription" rows="3">{{ old('description') }}</textarea>
            @error('description')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleInputStock" class="form-label">Product Stock</label>
            <input type="number" name="stock" value="{{ old('stock') }}" class="form-control" id="exampleInputStock">
            @error('stock')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleInputPrice" class="form-label">Product Price</label>
            <input type="number" name="price" value="{{ old('price') }}" class="form-control" id="exampleInputPrice">
            @error('price')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleInputSize" class="form-label">Product Size</label>
            <select class="form-select" name="size" aria-label="Default select example" id="exampleInputSize">
                <option selected disabled>Product Size</option>
                <option value="s">Small</option>
                <option value="m">Medium</option>
                <option value="l">Large</option>
            </select>
            @error('size')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleInputSize" class="form-label">Product Color</label>
            <select class="form-select" multiple name="colors[]" aria-label="Default select example" id="exampleInputSize">
                <option selected disabled>Product Color</option>
                @foreach ($colors as $color)
                    <option value="{{ $color->id }}">{{ $color->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
