<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Genre;
use App\Models\Author;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index(Request $request)
    {
        $query = Book::query();

        if ($author = $request->author) {
            $author = Author::where('username', $author)->firstOrFail();
            $query->whereHas('author', fn($q) => $q->where('id', $author->id));
        }

        if ($genre = $request->genre) {
            $genre = Genre::where('slug', $genre)->firstOrFail();
            $query->whereHas('genre', fn($q) => $q->where('id', $genre->id));
        }

        return view('books', ['allBooks' => $query->limit(40)->latest()->get()]);
    }
}
