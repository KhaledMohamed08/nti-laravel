<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Http\Resources\PostResorce;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        $posts->load('category');

        // return response()->json([
        //     'message' => 'success',
        //     'data' => PostResorce::collection($posts),
        // ]);

        return ApiResponse::success(PostResorce::collection($posts));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        $data = $request->validated();
        $post = Post::create($data);

        // return response()->json([
        //     'message' => 'post created successfully',
        //     'data' => $post,
        // ], 200);

        return ApiResponse::success(new PostResorce($post), 'Post Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        $post->load('category');
        // return response()->json([
        //     'data' => new PostResorce($post),
        // ]);

        return ApiResponse::success(new PostResorce($post));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        // if ($request->user()->cannot('update', $post)) {
        //     abort(403, 'You Are Unaouthorized');
        // }

        Gate::authorize('update', $post);

        $data = $request->validated();

        $post->update($data);

        // return response()->json([
        //     'message' => 'post updated successfully',
        //     'data' => $post,
        // ], 200);

        return ApiResponse::success(new PostResorce($post), 'Post Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        Gate::authorize('delete', $post);
        
        $post->delete();

        // return response()->json([
        //     'message' => 'post deleted successfully',
        // ], 200);

        return ApiResponse::success(new PostResorce($post), 'Post Deleted Successfully');
    }
}
