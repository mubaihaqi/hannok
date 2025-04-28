<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Show the login form.
     */
    public function create(): View|RedirectResponse
    {
        // Kalau user udah login, redirect ke profil
        if (Auth::check()) {
            return redirect()->route('profil');
        }

        return view('auth.login'); // Tampilin halaman login
    }

    /**
     * Handle an incoming login request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        // Validasi dan autentikasi user
        if (Auth::attempt($request->only('email', 'password'))) {
            // Regenerasi session agar aman
            $request->session()->regenerate();

            // Redirect ke halaman yang tujuannya user ingin akses setelah login, kalau gak ada redirect ke profil
            return redirect()->intended(route('profil', absolute: false));
        }

        // Kalau login gagal, kembalikan error
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    /**
     * Destroy an authenticated session (logout).
     */
    public function destroy(Request $request): RedirectResponse
    {
        // Logout user
        Auth::guard('web')->logout();

        // Hapus session dan regenerasi token
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirect ke halaman utama setelah logout
        return redirect('/');
    }
}
