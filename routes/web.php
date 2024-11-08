<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Home', function () {
    return view('Home');
});

Route::get('/tentangkami', function () {
    return view('TentangKami');
});