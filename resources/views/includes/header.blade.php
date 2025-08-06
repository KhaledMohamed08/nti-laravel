<header class="container-fluid p-0">
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('posts.index') }}">
                {{-- <img src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="Logo" width="30" height="24"
                        class="d-inline-block align-text-top"> --}}
                Bootstrap
            </a>
            @auth
                <div class="user-info">
                    <span>Hi, <span class="fw-bold">{{ auth()->user()->name }}</span></span>
                    <form style="display: inline" action="{{ route('logout.request') }}" method="POST">
                        @csrf
                        <input class="btn btn-danger btn-sm" type="submit" value="Logout">
                    </form>
                </div>
            @endauth
            @guest
                <div class="auth-pages">
                    <a class="btn btn-success btn-sm" href="{{ route('login') }}">Login</a>
                    <a class="btn btn-secondary btn-sm" href="{{ route('register') }}">Register</a>
                </div>
            @endguest
        </div>
    </nav>
</header>
