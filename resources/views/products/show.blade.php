<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Details</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar bg-body-tertiary mb-4">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1">Product Details</span>
        </div>
    </nav>

    <!-- Product Details -->
    <div class="container">
        @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <div class="card mx-auto" style="max-width: 600px;">
            <div class="actions mt-4 ms-3">
                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-success btn-sm"><i
                        class="bi bi-pencil-square"></i></a>
                <form class="d-inline" action="{{ route('products.delete', $product->id) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    {{-- <button onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm"><i class="bi bi-trash3-fill"></i></button> --}}
                    <button type="button" onclick="deleteConfirm(this)" class="btn btn-danger btn-sm"><i class="bi bi-trash3-fill"></i></button>
                </form>
            </div>
            <div class="card-body">
                <h2 class="card-title">{{ $product->title }}</h2>
                <p class="card-text">{{ $product->description }}</p>
                <h4 class="text-primary">${{ $product->price }}</h4>
                <h4 class="text-secondary">Size: {{ $product->size }}</h4>

                <a href="{{ route('products.index') }}" class="btn btn-secondary mt-3">Back to Products</a>
            </div>
        </div>
    </div>

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
</body>

</html>
