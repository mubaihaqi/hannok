<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Genre;
use App\Models\Author;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function index(Request $request)
    {
        $query = Blog::query();

        if ($author = $request->author) {
            $author = Author::where('username', $author)->firstOrFail();
            $query->whereHas('author', fn($q) => $q->where('id', $author->id));
        }

        if ($genre = $request->genre) {
            $genre = Genre::where('slug', $genre)->firstOrFail();
            $query->whereHas('genres', fn($q) => $q->where('slug', $genre->slug));
        }

        $allBlogs = $query->limit(40)->paginate(9)->withQueryString();

        $allAuthors = Author::orderBy('name', 'asc')->get();

        $allGenres = Genre::orderBy('nama', 'asc')->get();

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



        return view('blogs', [
            'allBlogs' => $allBlogs,
            'allAuthors' => $allAuthors,
            'allGenres' => $allGenres,
            'title2' => $title2,
            'gaketok2' => $gaketok2,
        ]);
    }

    public function search(Request $request)
    {
        $query = $request->input('query'); // Ambil input pencarian

        // Cari blog berdasarkan title atau nama penulis menggunakan LIKE
        $allBlogs = Blog::where('title', 'LIKE', "%{$query}%")
            ->orWhereHas('author', function ($q) use ($query) {
                $q->where('name', 'LIKE', "%{$query}%");
            })
            ->paginate(9)
            ->withQueryString();

        $allAuthors = Author::orderBy('name', 'asc')->get();
        $allGenres = Genre::orderBy('nama', 'asc')->get();

        return view('blogs', [
            'allBlogs' => $allBlogs,
            'allAuthors' => $allAuthors,
            'allGenres' => $allGenres,
            'title2' => "Hasil pencarian untuk '" . ucwords(strtolower($query)) . "'",
            'gaketok2' => '',
        ]);
    }
}
