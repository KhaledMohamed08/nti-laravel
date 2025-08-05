{{-- @dd($posts) --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts | Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
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
        <a class="btn btn-primary mx-3 mt-3" href="{{ route('posts.create') }}">Create New Post</a>
        <div class="posts mt-3">
            @foreach ($posts as $post)
                <div class="post m-3">
                    <div class="card">
                        <h5 class="card-header">Featured</h5>
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="card-text">{{ substr($post->content, 0, 150) . '.....' }}</p>
                            {{-- <a href="{{ url('/posts/' . $post->id) }}" class="btn btn-primary">Read Full Post</a> --}}
                            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">Read Full Post</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>
</body>

</html>
