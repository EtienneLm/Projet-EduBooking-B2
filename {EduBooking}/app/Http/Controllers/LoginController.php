<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentification réussie, rediriger l'utilisateur
            return redirect()->intended('/');
        } else {
            // Authentification échouée, rediriger avec un message d'erreur
            return redirect()->back()->withErrors(['email' => 'Email ou mot de passe incorrect.'])->withInput();
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        return redirect('/home');
    }
}
