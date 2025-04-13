<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

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
