<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $allPosts = Post::all();

        return PostResource::collection($allPosts);
    }

    public function show($id)
    {
        $post = Post::find($id);

        return new PostResource($post);
    }

    public function store(StorePostRequest $request)
    {
        $data = $request->all();

        $post = Post::create([
            'title' => $data['title'],
            'description' => $data['description'],
            'user_id' => $data['post_creator'],

        ]);

        return new PostResource($post);
    }
}
