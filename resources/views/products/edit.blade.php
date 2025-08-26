<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Product</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar bg-body-tertiary mb-4">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1">Create Product</span>
        </div>
    </nav>
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('products.update', $product->id) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label for="exampleInputTitle" class="form-label">Product Title</label>
                <input type="text" name="title" value="{{ old('title', $product->title) }}" class="form-control" id="exampleInputTitle">
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
                <input type="number" name="stock" value="{{ old('stock', $product->stock) }}" class="form-control" id="exampleInputStock">
                @error('stock')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="exampleInputPrice" class="form-label">Product Price</label>
                <input type="number" name="price" value="{{ old('price', $product->price) }}" class="form-control" id="exampleInputPrice">
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
    </div>

</body>

</html>
