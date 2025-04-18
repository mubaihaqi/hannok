<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::get('/promo', function () {
    return view('promo');
});

Route::get('/toko', function () {
    return view('toko');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/books', function () {
    return view('books');
});

Route::get('/book', function () {
    return view('book');
});

Route::get('/authors', function () {
    return view('authors');
});

Route::get('/genres', function () {
    return view('genres');
});

Route::get('/blogs', function () {
    return view('blogs');
});
