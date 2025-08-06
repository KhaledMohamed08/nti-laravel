@extends('layouts.app')
@section('title', 'Show')
@section('content')
    <article class="post m-5">
        <div class="actions text-end">
            <a class="btn btn-success me-1 btn-sm" href="{{ route('posts.edit', $post->id) }}"><i
                    class="bi bi-pencil-square"></i></a>
            {{-- <a class="btn btn-danger ms-1 btn-sm" href="{{ route('posts.destroy', $post->id) }}"><i class="bi bi-trash-fill"></i></a> --}}
            <form id="delete-form" action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display: inline">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger ms-1 btn-sm" type="button"><i class="bi bi-trash-fill"></i></button>
            </form>
        </div>
        <div class="title text-center">
            <h2>{{ $post->title }}</h2>
        </div>
        <div class="content mt-3">
            <p>{{ $post->content }}</p>
        </div>
        <div class="tags mt-3">
            @foreach ($post->tags as $tag)
                <span class="text-light bg-secondary rounded-2 p-1">{{ $tag->title }}</span>
            @endforeach
        </div>

        <div class="text-center">
            {{-- <a class="btn btn-primary" href="{{ url('/posts') }}">Go to posts</a> --}}
            <a class="btn btn-primary" href="{{ route('posts.index') }}">Go to posts</a>
        </div>
    </article>
@endsection
@push('scripts')
    <script>
        const deleteBtn = document.querySelector('form button');

        deleteBtn.addEventListener('click', () => {
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                toast: true,
                position: 'top',
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    // Swal.fire({
                    //     title: "Deleted!",
                    //     text: "Your file has been deleted.",
                    //     icon: "success"
                    // });
                    deleteBtn.closest('form').submit();
                }
            });
        })
    </script>
@endpush
