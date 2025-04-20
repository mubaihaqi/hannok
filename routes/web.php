<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\TokoKamiController;
use App\Models\Author;
use App\Models\Book;

Route::get('/', [HomeController::class, 'index']);

Route::get('/promo', [PromoController::class, 'index']);

Route::get('/toko', [TokoKamiController::class, 'index']);

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/books', [BooksController::class, 'index']);

Route::get('/book', function () {
    return view('book');
});

Route::get('/book/{book:slug}', function (Book $book) {
    return view('book', ['book' => $book]);
});

Route::get('/books/{author:username}', function (Author $author) {
    return view('books', ['title' => count($author->book) . ' Article by ' . $author->book, 'books' => $author->book]);
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
