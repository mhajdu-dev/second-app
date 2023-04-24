<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $posts = [
            ['id' => 1, 'title' => 'Post one'],
            ['id' => 2, 'title' => 'Post two']
        ];

        return view('posts.index', [
            'posts' => $posts
        ]);
    }

    public function show($id) {
        return view('posts.show', [
            'id' => $id
        ]);
    }
}
