<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $authors = [
        [
            'id' => 1,
            'name' => 'Hannah Abigail',
            'username' => 'hagail99',
            'img' => asset('images/abigail.png'),
            'bio' => 'A passionate book lover and aspiring author. I enjoy exploring different genres and sharing my thoughts on literature.',
        ],
        [
            'id' => 2,
            'name' => 'Jessica Kart',
            'username' => 'Hjaeqss',
            'img' => asset('images/jessica.png'),
            'bio' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis nam deleniti, quae sit ipsam maiores?',
        ],
        [
            'id' => 3,
            'name' => 'Kezia Almara',
            'username' => 'Keznath',
            'img' => asset('images/keznath.png'),
            'bio' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. deleniti, quae sit ipsam maiores?',
        ],
        [
            'id' => 4,
            'name' => 'Sakura Miyawaki',
            'username' => 'Kkura6',
            'img' => asset('images/kkura.png'),
            'bio' => 'Lorem, sit amet consectetur adipisicing elit. Reiciendis nam deleniti, quae sit ipsam maiores?',
        ]
    ];

    return view('home', [
        'authors' => $authors
    ]);
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

Route::get('/books', function () {
    return view('books');
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
