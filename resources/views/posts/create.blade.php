@extends('layouts.app')
@section('title', 'Create')
@section('content')
    <form class="m-3" action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Post Title*</label>
            <input type="text" class="form-control" name="title" id="exampleFormControlInput1" placeholder="Post Title"
                value="{{ old('title') }}">
            @error('title')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Post Content*</label>
            <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="10">{{ old('content') }}</textarea>
            @error('content')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <a class="btn btn-secondary" href="{{ route('posts.index') }}" class="btn btn-primary">Cancel</a>
        <button type="submit" class="btn btn-primary">Create Post</button>
    </form>
@endsection
