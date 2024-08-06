<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home1.home');
});

Route::get('/home1', function () {
    return view('home1.home');
});

Route::get('/home2', function () {
    return view('home2.home2');
});

Route::get('/blog', function () {
    return view('blog.blog');
});


Route::get('/blogDetails', function () {
    return view('blog.blogDetails');
});