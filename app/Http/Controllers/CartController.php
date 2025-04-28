<?php

namespace App\Http\Controllers;

// app/Http/Controllers/CartController.php

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Book;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    // 🛒 Tambah buku ke cart
    public function addToCart(Request $request, $bookId)
    {
        $user = Auth::user(); // ambil user yg login

        $cart = Cart::where('user_id', $user->id)
            ->where('book_id', $bookId)
            ->first();

        if ($cart) {
            // kalau buku udah ada di cart, tambahin quantity 1
            $cart->quantity += 1;
            $cart->save();
        } else {
            // kalau belum ada, bikin baru
            Cart::create([
                'user_id' => $user->id,
                'book_id' => $bookId,
                'quantity' => 1,
            ]);
        }

        // ⬇️ Ini bagian barunya
        if ($request->ajax()) {
            return response()->json([
                'message' => 'Buku berhasil ditambahkan ke keranjang!'
            ]);
        }

        // Kalau bukan ajax, tetep redirect biasa
        return redirect()->back()->with('success', 'Buku berhasil ditambahkan ke keranjang!');
    }

    // 🛒 Lihat semua item di cart
    public function viewCart()
    {
        $user = Auth::user();
        $cartItems = Cart::with('book')->where('user_id', $user->id)->get();

        return view('cart.index', compact('cartItems'));
    }

    // 🛒 Update quantity di cart
    public function updateCart(Request $request, $cartId)
    {
        $cart = Cart::findOrFail($cartId);
        $cart->quantity = $request->quantity;
        $cart->save();

        return redirect()->back()->with('success', 'Jumlah buku di keranjang berhasil diperbarui!');
    }

    // 🛒 Hapus item dari cart
    public function removeFromCart($cartId)
    {
        $cart = Cart::findOrFail($cartId);
        $cart->delete();

        return redirect()->back()->with('success', 'Buku berhasil dihapus dari keranjang!');
    }
}
