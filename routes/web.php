<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return 'Home';
});

Route::group(['prefix' => '/user'], function () {
    Route::get('/profile', function() {
        return 'Profile';
    });

    Route::get('/password', function () {
        return 'Password';
    });
});