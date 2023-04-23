<?php

use Illuminate\Support\Facades\Route;

Route::get('/posts/{id}', function($id) {
    return view('posts.show', [
        'userId' => $id
    ]);
});
