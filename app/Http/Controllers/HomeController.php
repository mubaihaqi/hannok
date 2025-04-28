<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Book;
use App\Models\Genre;
use App\Models\Author;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Top Authors Section
        $mostPopular = Author::withCount(['books', 'blogs'])
            ->orderByDesc('books_count')
            ->orderByDesc('blogs_count')
            ->first() ?? new Author();  // Fallback ke Author kosong jika tidak ada data

        $newVoices = Author::with(['books', 'blogs'])
            ->whereHas('books', fn($q) => $q->where('created_at', '>=', now()->subMonth()))
            ->orWhereHas('blogs', fn($q) => $q->where('created_at', '>=', now()->subMonth()))
            ->latest()
            ->first();

        $editorsPick = Author::where('username', 'keznath')->first() ?? new Author();

        $trendingNow = Author::withCount(['blogs', 'books'])
            ->orderByDesc('blogs_count')
            ->first() ?? new Author();  // Fallback ke Author kosong jika tidak ada data

        // BUKU TERBARU
        $latestBooks = Book::latest()->take(5)->get();

        // AUTHORSGENRE
        $topGenres = Genre::withCount('books')
            ->orderByDesc('books_count')
            ->take(6)
            ->get();

        // BOOKS SHOWCASE (nanti ya, setelah ada fitur beli)

        // BLOG TERBARU
        $latestBlogs = Blog::latest()->take(3)->get();

        // Return the view with the data
        $topAuthors = [
            'mostPopular' => $mostPopular,
            'newVoices' => $newVoices,
            'editorsPick' => $editorsPick,
            'trendingNow' => $trendingNow,
        ];

        return view('home', compact(
            'topAuthors',
            'latestBooks',
            'topGenres',
            'latestBlogs'
        ));
    }

    public function searchAjax(Request $request)
    {
        $query = $request->input('q');

        $books = Book::with('author') // Pastikan relasi author dimuat
            ->where('title', 'like', "%{$query}%")
            ->get();

        $authors = Author::where('name', 'like', "%{$query}%")
            ->orWhere('username', 'like', "%{$query}%")
            ->get();

        $blogs = Blog::with('author')
            ->where('title', 'like', "%{$query}%")
            ->get();

        $genres = Genre::where('nama', 'like', "%{$query}%")->get();

        return response()->json([
            'books' => $books,
            'authors' => $authors,
            'blogs' => $blogs,
            'genres' => $genres,
        ]);
    }
}
// Alya Celestine Amara