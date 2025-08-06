@extends('layouts.app')
@section('title', 'Index')
@section('content')
    <a class="btn btn-primary mx-3 mt-3" href="{{ route('posts.create') }}">Create New Post</a>
    <div class="posts mt-3">
        @foreach ($posts as $post)
            <x-post-card bg="dark" postId="{{ $post->id }}">{{ $post->title }}</x-post-card>
        @endforeach
    </div>
@endsection
