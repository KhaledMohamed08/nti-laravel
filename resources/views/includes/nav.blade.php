<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('products.index') }}">NTI Products</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
            </ul>
            <div>
                @auth
                    <div class="user-info">
                        <span class="fw-bold">Hi, {{ auth()->user()->name ?? 'User' }}</span>
                        <x-ui.link-btn color="danger" class="btn-sm" link="{{ route('logout') }}" method="POST"
                            type="submit">Logout</x-ui.link-btn>
                    </div>
                @endauth
                @guest
                    <x-ui.link-btn link="{{ route('login') }}" color="secondary">Login</x-ui.link-btn>
                    <x-ui.link-btn link="{{ route('register') }}" color="success">Register</x-ui.link-btn>
                @endguest
            </div>
        </div>
    </div>
</nav>
