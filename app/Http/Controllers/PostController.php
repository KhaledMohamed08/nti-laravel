<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class PostController extends Controller
{
    public function index()
    {
        // $posts = Post::where('is_active', true)->get();
        $posts = Post::all();
        // dd($posts);
        $posts->load('category');
        // dd($posts);

        // return view('posts.index', ['posts' => $posts]);
        return view('posts.index', compact('posts'));
    }

    public function show(int $id)
    {
        // $post = Post::where('id', $id)->first();
        $post = Post::find($id);
        $post->load('category', 'tags');

        return view('posts.show', compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(StorePostRequest $request)
    {
        $data = $request->validated();

        Post::create([
            'title' => $data['title'],
            'content' => $data['content'],
        ]);

        return redirect()->route('posts.index')->with('success', 'post created successfully.');
    }

    public function edit(Post $post)
    {
        // $post = Post::find($id);

        return view('posts.edit', compact('post'));
    }

    public function update(UpdatePostRequest $request, Post $post)
    {
        $data = $request->validated();

        $post->update($data);

        return redirect()->route('posts.show', $post->id)->with('success', 'post updated successfully.');
    }

    public function delete(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index')->with('success', 'post deleted successfully');
    }
}
