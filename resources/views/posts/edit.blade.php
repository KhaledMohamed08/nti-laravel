@extends('layouts.app')
@section('title', 'Edit')
@section('content')
    <form class="m-3" action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Post Title*</label>
            <input type="text" class="form-control" name="title" id="exampleFormControlInput1" placeholder="Post Title"
                value="{{ old('title', $post->title) }}">
            @error('title')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Post Content*</label>
            <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="10">{{ old('content', $post->content) }}</textarea>
            @error('content')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-secondary">Cancel</a>
        <button type="submit" class="btn btn-primary">Update Post</button>
    </form>
@endsection
