<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginView()
    {
        return view('auth.login');
    }

    public function login(Request $request, User $user)
    {
        dd($request);
    }

    public function registerView()
    {
        return view('auth.register');
    }

    public function register(Request $request, User $user)
    {
        dd($request);
    }
}
