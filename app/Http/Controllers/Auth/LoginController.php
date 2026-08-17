<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Services\ActivityService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Menampilkan halaman login
    public function showLogin()
    {
        return view('auth.login');
    }

    // Proses login
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();

            // Catat aktivitas login hanya untuk siswa
            if (Auth::user()->role === 'student') {

                ActivityService::log(
                    Auth::id(),
                    'login',
                    'Login ke sistem',
                    $request->ip()
                );

                return redirect('/dashboard');
            }

            // Guru masuk portal admin
            if (Auth::user()->role === 'teacher') {
                return redirect('/admin/dashboard');
            }
        }

        return back()
            ->withErrors([
                'email' => 'Email atau kata sandi salah.',
            ])
            ->onlyInput('email');
    }

    // Proses logout
    public function logout(Request $request)
    {
        if (Auth::check() && Auth::user()->role === 'student') {

            ActivityService::log(
                Auth::id(),
                'logout',
                'Logout dari sistem',
                $request->ip()
            );
        }

        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}