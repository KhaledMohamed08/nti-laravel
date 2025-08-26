<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Products</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <!-- Custom Styles -->
    <style>
        .products {
            gap: 1rem;
        }

        .product-card {
            width: 18rem;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1">Navbar</span>
        </div>
    </nav>

    <!-- Product List -->
    <div class="container my-3">
        @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <a href="{{ route('products.create') }}" class="btn btn-primary p-2 mb-3">Create New Product</a>
        <div class="products d-flex flex-wrap align-items-stretch justify-content-start">
            @foreach ($products as $product)
                <div class="card text-center product-card mb-3 d-flex flex-column" style="width: 18rem;">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $product->title }}</h5>
                        <p class="card-text">{{ $product->description }}</p>

                        <div class="mt-auto">
                            <h5 class="card-title text-primary">${{ $product->price }}</h5>
                            <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary mt-2">Product
                                Details</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</body>

</html>
