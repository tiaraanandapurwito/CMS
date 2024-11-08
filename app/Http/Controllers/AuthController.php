<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    // Display the login page
    public function showLoginForm()
    {
        return view('login.index');
    }

    // Handle login process
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Attempt to authenticate the user with the 'admin' guard if you have one
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/admin')->with('success', 'Login Berhasil'); // Redirect to admin dashboard or intended page
        }
        // dd($request->all());

        return back()->withErrors([
            'email' => 'Email atau password yang anda masukkan salah! Silahkan coba lagi',
        ]);
    }
    
    // Logout function (optional)
    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login.index');
    }
}
