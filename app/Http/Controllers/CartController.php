<?php

namespace App\Http\Controllers;

// app/Http/Controllers/CartController.php

use App\Models\Book;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    // 🛒 Tambah buku ke cart
    public function addToCart(Request $request, $bookId)
    {
        Log::info('Is AJAX: ' . ($request->ajax() ? 'Yes' : 'No'));

        $user = Auth::user();

        $cart = Cart::where('user_id', $user->id)
            ->where('book_id', $bookId)
            ->first();

        if ($cart) {
            $cart->quantity += 1;
            $cart->save();
        } else {
            Cart::create([
                'user_id' => $user->id,
                'book_id' => $bookId,
                'quantity' => 1,
            ]);
        }

        if ($request->ajax()) {
            return response()->json([
                'message' => 'Buku berhasil ditambahkan ke keranjang!'
            ]);
        }

        if (!$request->ajax()) {
            return response()->json([
                'message' => 'Buku berhasil ditambahkan ke keranjang!'
            ]);
        }

        return redirect()->back()->with('success', 'Buku berhasil ditambahkan ke keranjang!');
    }

    // 🛒 Lihat semua item di cart
    public function viewCart()
    {
        $user = Auth::user();
        $cartItems = Cart::with('book')->where('user_id', $user->id)->get();

        // dd($cartItems);
        return view('cart', compact('cartItems'));
    }

    // 🛒 Update quantity di cart
    public function updateCart(Request $request, $cartId)
    {
        $cart = Cart::findOrFail($cartId);
        $cart->quantity = $request->quantity;
        $cart->save();

        return redirect()->back()->with('success', 'Jumlah buku di keranjang berhasil diperbarui!');
    }

    public function update(Request $request, $id)
    {
        $cartItem = Cart::findOrFail($id);
        $cartItem->quantity = $request->input('quantity');
        $cartItem->save();

        return response()->json(['success' => true]);
    }

    // 🛒 Hapus item dari cart
    public function removeFromCart($cartId)
    {
        $cart = Cart::findOrFail($cartId);

        if ($cart->user_id !== Auth::id()) {
            return response()->json(['message' => 'Unauthorized'], 403);
        }

        $cart->delete();

        return response()->json(['message' => 'Item berhasil dihapus dari keranjang!']);
    }

    // public function removeFromCart($cartId)
    // {
    //     $cart = Cart::findOrFail($cartId);
    //     $cart->delete();

    //     return redirect()->back()->with('success', 'Buku berhasil dihapus dari keranjang!');
    // }
}
