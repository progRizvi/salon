<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function registerForm()
    {
        return view('auth.registration');

    }
    public function registerStore(Request $request)
    {
        return view('auth.registration');

    }
    public function loginForm()
    {
        return view('auth.login');

    }
    public function loginStore(Request $request)
    {
        $credential = $request->except("_token");

        if (auth()->attempt($credential)) {
            notify()->success("Login Success");
            if (auth()->user()->is_admin === 1) {
                return to_route('dashboard');
            }
            return to_route('home');
        }
        notify()->error("Login Failed");
        return back();
    }
    public function logout()
    {
        auth()->logout();
        if (!auth()->user()) {
            notify()->success("Logout Success");
        }
        return to_route('login');
    }

}
