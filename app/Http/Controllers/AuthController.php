<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function loginpost(LoginRequest $request)
    {
        $credentials = $request->validated();
            if (Auth::attempt($credentials)) {
            return redirect()->route('notes')->with('status', 'Logged in Succesfully');
        } else {
        return redirect()->route('login')->with('error', 'Incorrect credentials');
        }
    }

    public function registerpost(RegisterRequest $request)
    {
        $credentials = $request->validated();

        $user = User::create($credentials);

        if (Auth::attempt($credentials)) {
            Auth::login($user);
            return redirect()->route('notes')->with('status', 'Logged in Succesfully');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login')->with('status', 'Logged out Succesfully');
    }
}
