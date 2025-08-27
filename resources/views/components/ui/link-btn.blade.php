@props([
    'link' => '#',
    'color' => 'primary',
    'method' => 'GET',
    'type' => 'button',
])

{{-- @dd($attributes) --}}

@if ($method === 'GET')
    <a href="{{ $link }}" {{ $attributes->merge(['class' => "btn btn-$color"]) }}>{{ $slot }}</a>
@else
    <form class="d-inline" action="{{ $link }}" method="POST">
        @method("$method")
        @csrf
        {{-- <button onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm"><i class="bi bi-trash3-fill"></i></button> --}}
        <button type="{{ $type }}" onclick="deleteConfirm(this)" {{ $attributes->merge(['class' => "btn btn-$color"]) }}>{{ $slot }}</button>
    </form>
@endif
