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

        $allBooks = $query->limit(40)->latest()->get();

        // Cek apakah author-nya valid biar bisa munculin nama, kalo nggak, kasih hidden
        $gaketok2 = 'hidden';
        if ($author) {
            $title2 = $author->name;
            $gaketok2 = '';
        } elseif ($genre) {
            $title2 = $genre->nama;
            $gaketok2 = '';
        } else {
            $title2 = 'Semua buku tersedia';
        }

        $allAuthors = Author::orderBy('name', 'asc')->get();

        $allGenres = Genre::orderBy('nama', 'asc')->get();

        return view('books', [
            'allBooks' => $allBooks,
            'title2' => $title2,
            'gaketok2' => $gaketok2,
            'allAuthors' => $allAuthors,
            'allGenres' => $allGenres
        ]);
    }
}
