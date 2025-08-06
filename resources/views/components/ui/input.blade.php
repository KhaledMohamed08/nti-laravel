@props([
    'type' => 'text',
    'name' => '',
])

<div class="form-floating mb-3">
    <input type="{{ $type }}" class="form-control" name="{{ $name }}" id="floatingInput" placeholder="{{ $slot }}">
    <label for="floatingInput">{{ $slot }}</label>
</div>
