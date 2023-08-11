<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        if (Auth::user()) {
            return redirect()->route('users.index')->with('success', 'Você já está logado');
        }

        return view('auth.login');
    }

    public function validateLogin(Request $request)
    {
        if (!Auth::attempt($request->only(['email', 'password']), $request->boolean('remember'))) {
            return redirect()->route('login')->with('error', 'E-mail ou senha inválidos');
        }

        return redirect()->route('users.index')->with('success', 'Login efetuado com sucesso!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        return redirect()->route('login');
    }
}
