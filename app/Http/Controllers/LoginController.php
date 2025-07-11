<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'g-recaptcha-response' => 'required|captcha',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            $request->session()->regenerate();

            if ($user->role === 'admin') {
                // Redirect ke dashboard Filament
                return redirect()->intended('/admin/dashboard'); // ganti dengan prefix Filament jika beda
            } elseif ($user->role === 'customer') {
                // Redirect ke halaman user biasa
                return redirect()->route('home');
            } else {
                Auth::logout();
                return back()->withErrors([
                    'email' => 'Role tidak dikenali.',
                ]);
            }
        }

        return back()->withErrors([
            'email' => 'Email atau kata sandi salah.',
        ])->withInput();
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
