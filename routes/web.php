<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return 'Home';
});

Route::get('/about', function() {
    return 'About';
})->name('about');