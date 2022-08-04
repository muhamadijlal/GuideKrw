<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/dashboard', function () {
    return view('layouts/dashboard');
});

Route::get('/detail-blog', function () {
    return view('layouts/detail-blog');
});

Route::get('/detail-place', function () {
    return view('layouts/detail-place');
});

Route::get('/search-result', function () {
    return view('layouts/search-result');
});
