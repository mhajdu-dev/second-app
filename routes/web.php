<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return 'Home';
});

Route::get('/users/{userId}/{username}', function($id, $username) {
    return $id . ' ' . $username;
});