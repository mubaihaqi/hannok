<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenresController extends Controller
{
    public function index(Request $request)
    {
        $query = Genre::query();

        $allGenres = $query->latest()->get();

        return view('genres', [
            'allGenres' => $allGenres,
            'title2' => '',
            'gaketok2' => 'hidden'
        ]);
    }

    public function search(Request $request)
    {
        $query = $request->input('query'); // Ambil input pencarian

        // Cari genre berdasarkan nama menggunakan LIKE
        $allGenres = Genre::where('nama', 'LIKE', "%{$query}%")->get();

        return view('genres', [
            'allGenres' => $allGenres,
            'title2' => "Hasil pencarian untuk '{$query}'",
            'gaketok2' => ''
        ]);
    }
}
