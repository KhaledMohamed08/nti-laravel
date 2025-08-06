@props([
    'postId' => '',
    'bg' => 'light'
])

@php
    $post = App\Models\Post::find($postId);
@endphp

<div class="post m-3">
    <div class="card {{ $bg == 'dark' ? 'bg-dark text-light' : ''}}">
        <h5 class="card-header">{{ $post->category->title ?? 'non category' }}</h5>
        <div class="card-body">
            <h5 class="card-title">{{ $slot }}</h5>
            <p class="card-text">{{ substr($post->content, 0, 150) . '.....' }}</p>
            {{-- <a href="{{ url('/posts/' . $post->id) }}" class="btn btn-primary">Read Full Post</a> --}}
            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">Read Full Post</a>
        </div>
    </div>
</div>
