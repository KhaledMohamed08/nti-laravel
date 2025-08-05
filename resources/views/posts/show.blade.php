{{-- @dd($posts) --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts | Show</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body>
    <header class="container-fluid">
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    {{-- <img src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="Logo" width="30" height="24"
                        class="d-inline-block align-text-top"> --}}
                    Bootstrap
                </a>
            </div>
        </nav>
    </header>

    <section class="container">
        @if (session('success'))
            <div class="alert alert-success m-3" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <article class="post m-5">
            <div class="actions text-end">
                <a class="btn btn-success me-1 btn-sm" href="{{ route('posts.edit', $post->id) }}"><i
                        class="bi bi-pencil-square"></i></a>
                {{-- <a class="btn btn-danger ms-1 btn-sm" href="{{ route('posts.destroy', $post->id) }}"><i class="bi bi-trash-fill"></i></a> --}}
                <form id="delete-form" action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display: inline">
                    @csrf
                    @method('DELETE')
                    <button
                        class="btn btn-danger ms-1 btn-sm" type="button"><i class="bi bi-trash-fill"></i></button>
                </form>
            </div>
            <div class="title text-center">
                <h2>{{ $post->title }}</h2>
            </div>
            <div class="content mt-3">
                <p>{{ $post->content }}</p>
            </div>

            <div class="text-center">
                {{-- <a class="btn btn-primary" href="{{ url('/posts') }}">Go to posts</a> --}}
                <a class="btn btn-primary" href="{{ route('posts.index') }}">Go to posts</a>
            </div>
        </article>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>
    <script>
        const deleteBtn = document.querySelector('form button');

        deleteBtn.addEventListener('click', () => {
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                toast: true,
                position: 'top',
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    // Swal.fire({
                    //     title: "Deleted!",
                    //     text: "Your file has been deleted.",
                    //     icon: "success"
                    // });
                    deleteBtn.closest('form').submit();
                }
            });
        })
    </script>
</body>

</html>
