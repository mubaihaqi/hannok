<?php

use App\Models\Blog;
use App\Models\Book;
use App\Models\Author;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\GenresController;
use App\Http\Controllers\AuthorsController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TokoKamiController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/search/ajax', [HomeController::class, 'searchAjax'])->name('search.ajax');

Route::get('/promo', [PromoController::class, 'index']);

Route::get('/toko', [TokoKamiController::class, 'index']);

Route::get('/contact', function () {
    return view('contact');
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

Route::get('/profil', function () {
    return view('profil');
})->middleware(['auth', 'verified'])->name('profil');

Route::middleware('auth')->group(function () {
    Route::get('/cart', [CartController::class, 'viewCart'])->name('cart.index');
    Route::post('/cart/add/{book}', [CartController::class, 'addToCart'])->name('cart.add');
    Route::post('/cart/update/{cart}', [CartController::class, 'updateCart'])->name('cart.update');
    Route::post('/cart/remove/{cart}', [CartController::class, 'removeFromCart'])->name('cart.remove');

    Route::get('/favorite', [FavoriteController::class, 'viewFavorite'])->name('favorite.index');
    Route::post('/favorite/add/{book}', [FavoriteController::class, 'addToFavorite'])->name('favorite.add');

    Route::get('/profil', [ProfileController::class, 'edit'])->name('profil.edit');
    Route::patch('/profil', [ProfileController::class, 'update'])->name('profil.update');
    Route::delete('/profil', [ProfileController::class, 'destroy'])->name('profil.destroy');
});

// // Redirect if not authenticated
// Route::get('/cart', function () {
//     return redirect()->route('login')->with('message', 'Please log in to view your cart.');
// })->name('cart.index')->middleware('guest');

// $allBooks = Book::limit(40)->get;

use App\Http\Controllers\Auth\AuthenticatedSessionController;

Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store'])->name('login');
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

// Halaman dashboard (hanya bisa diakses setelah login)
Route::get('/profil', function () {
    return view('profil');
})->middleware(['auth', 'verified'])->name('profil');

// Route::get('/favorite', [FavoriteController::class, 'index']);

require __DIR__ . '/auth.php';
