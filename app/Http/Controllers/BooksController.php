<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index()
    {
        $allBooks = Book::limit(40)->get();

        return view('books', compact('allBooks'));
    }
}
