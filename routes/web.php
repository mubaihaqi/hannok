<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\PromoController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/promo', [PromoController::class, 'index']);

Route::get('/toko', function () {
    return view('toko');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/books', [BooksController::class, 'index']);

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
