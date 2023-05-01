<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function registerForm()
    {
        return view('auth.registration');

    }
    public function registerStore(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'phone' => 'unique:users,phone',
            'password' => 'required|confirmed',
        ]);
        if ($validation->fails()) {
            foreach ($validation->errors()->all() as $error) {
                notify()->error($error);
            }
            return back();
        }
        $data = $request->except("_token", "password_confirmation");
        $data['password'] = bcrypt($request->password);
        $data['is_admin'] = 0;
        $user = User::create($data);
        if ($user) {
            notify()->success("Registration Success");
            return to_route('login');
        }
        notify()->error("Registration Failed");
        return back();

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
        return to_route('home');
    }
}
