@if (session('success'))
    <div class="alert alert-success m-3" role="alert">
        {{ session('success') }}
    </div>
@endif

@if (session('fail'))
    <div class="alert alert-danger m-3" role="alert">
        {{ session('fail') }}
    </div>
@endif

