<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function addToFavorite($bookId)
    {
        $user = Auth::user();

        // Cek apakah buku sudah ada di favorit
        $favorite = Favorite::where('user_id', $user->id)
            ->where('book_id', $bookId)
            ->first();

        if ($favorite) {
            return response()->json([
                'message' => 'Buku sudah ada di daftar favorit!'
            ], 200);
        }

        // Tambahkan ke favorit
        Favorite::create([
            'user_id' => $user->id,
            'book_id' => $bookId,
        ]);

        return response()->json([
            'message' => 'Buku berhasil ditambahkan ke daftar favorit!'
        ], 201);
    }

    public function viewFavorite()
    {
        $user = Auth::user();
        $favoriteItems = Favorite::with('book.author', 'book.genre')->where('user_id', $user->id)->get();

        // dd($favoriteItems);
        return view('favorite', compact('favoriteItems'));
    }
}
