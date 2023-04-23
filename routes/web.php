<?php

use Illuminate\Support\Facades\Route;

Route::get('/posts', function () {
    $posts = [
        ['id' => 1, 'title' => 'Post one'],
        ['id' => 2, 'title' => 'Post two']
    ];

    return view('posts.index', [
        'posts' => $posts
    ]);
});