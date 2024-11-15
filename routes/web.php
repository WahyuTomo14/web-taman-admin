<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('Home');
});

Route::get('/tentangkami', function () {
    return view('TentangKami');
});

Route::get('/blogs', function () {
    return view('blog.index');
});

Route::get('/blogsdetail', function () {
    return view('blog.detail');
});

Route::get('/', [BlogController::class, 'Home'])->name('Home');
Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
Route::get('/blogs/{id}', [BlogController::class, 'show'])->name('blogs.show');
