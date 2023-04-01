<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $allPosts = [
            [
                'id' => 1,
                'title' => 'Laravel',
                'description' => 'hello laravel',
                'posted_by' => 'Ahmed',
                'created_at' => '2023-04-01 10:00:00',
            ],

            [
                'id' => 2,
                'title' => 'PHP',
                'description' => 'hello php',
                'posted_by' => 'Mohamed',
                'created_at' => '2023-04-01 10:00:00',
            ],

            [
                'id' => 3,
                'title' => 'Javascript',
                'description' => 'hello javascript',
                'posted_by' => 'Mohamed',
                'created_at' => '2023-04-01 10:00:00',
            ],
        ];

        return view('posts.index',[
            'posts' => $allPosts,
        ]);
    }

    public function show($id)
    {
//        dd($id);
        $post = [
            'id' => 3,
            'title' => 'Javascript',
            'description' => 'hello javascript',
            'posted_by' => 'Mohamed',
            'created_at' => '2023-04-01 10:00:00',
        ];

        return view('posts.show', ['post' => $post]);
    }

    public function create()
    {
        return view('posts.create');
    }
}
