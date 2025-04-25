<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Author;
use Illuminate\Http\Request;

class AuthorsController extends Controller
{
    public function index(Request $request)
    {
        $query = Author::query();

        $allAuthors = Author::orderBy('name', 'asc')->get();

        $allGenres = Genre::orderBy('nama', 'asc')->get();

        return view('authors', [
            'allGenres' => $allGenres,
            'allAuthors' => $allAuthors,
        ]);
    }
}
