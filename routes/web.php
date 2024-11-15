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

Route::get('/', [BlogController::class, 'Home'])->name('Home');
Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
Route::get('/blogs/{title}', [BlogController::class, 'show'])->name('blogs.show');