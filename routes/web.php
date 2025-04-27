<?php

use App\Models\Blog;
use App\Models\Book;
use App\Models\Author;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\GenresController;
use App\Http\Controllers\AuthorsController;
use App\Http\Controllers\TokoKamiController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/search/ajax', [HomeController::class, 'searchAjax'])->name('search.ajax');

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

Route::get('/book/{book:slug}', function (Book $book) {
    return view('book', ['book' => $book]);
});

Route::get('/genres', [GenresController::class, 'index']);

Route::get('/genres/search', [GenresController::class, 'search']);

Route::get('/blogs', [BlogsController::class, 'index']);

Route::get('/blogs/search', [BlogsController::class, 'search']);

Route::get('/blog/{blog:slug}', function (Blog $blog) {
    return view('blogper', ['blog' => $blog]);
});

Route::get('/authors', [AuthorsController::class, 'index']);

Route::get('/authors/search', [AuthorsController::class, 'search']);

Route::get('/author/{author:username}', function (Author $author) {
    return view('author', ['author' => $author]);
});


// $allBooks = Book::limit(40)->get;