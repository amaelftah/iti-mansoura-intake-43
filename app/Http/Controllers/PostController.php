<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;

class PostController extends Controller
{
    public function test()
    {
        $books = ['b1', 'b2'];

//        dd($books);

        return view('test', [
                'books' => $books,
                'name' => 'Ahmed'
            ]
        );
    }

    public function index()
    {
        $allPosts = Post::all(); //Select * from posts; ... return collection object
//        dd($allPosts);
        return view('posts.index',[
            'posts' => $allPosts,
        ]);
    }

    public function show($id)
    {
        $post = Post::find($id); //select * from posts where id = 1 limit 1;
//        $post = Post::where('id', $id)->first(); //select * from posts where id = 1 limit 1;
//        $posts = Post::where('id', $id)->get(); //select * from posts where id = 1 ;

//        $posts = Post::where('title', 'Laravel')->get(); //select * from posts where title = laravel;
//        Post::where('title', 'Laravel')->first();//select * from posts where title = laravel limit 1;
//        dd($id);
//        dd($posts);
        return view('posts.show', ['post' => $post]);
    }

    public function create()
    {
        $users = User::all();

        return view('posts.create',[
            'users' => $users
        ]);
    }

    public function store(StorePostRequest $request)
    {
        //validate on the data
//        $request->validate([
//            'title' => ['required', 'min:3'],
//            'description' => ['required', 'min:5'],
//        ],[
//            'title.required' => 'my custom message',
//            'title.min' => 'my custom message for min rule',
//        ]);

//        $data = request()->all();
//
//        $title = request()->title;
//        $description = request()->description;
//        $postCreator = request()->post_creator;

        $data = $request->all();

        Post::create([
            'title' => $data['title'],
            'description' => $data['description'],
            'user_id' => $data['post_creator'],

        ]); //insert into posts (title,description)

        return to_route('posts.index');
    }
}

//1- Schema Structure Change ... (Create table, Edit table, Delete table).... database migrations
//2- CRUD Operations ... (Insert row, edit row , delete row)
