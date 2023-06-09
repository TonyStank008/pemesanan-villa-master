<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


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

    public function auth(Request $request)
    {
       
        
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $user = User::where('email', 'like', $request->email)->first();

            if($user->role == 'admin'){
                return redirect()->intended('/dashboard');
            }

            if($user->role == 'user'){
                return redirect()->intended('/');
            }
            
        }

        Session::flash('loginStatus', 'failed');
        Session::flash('loginStatusMessage', 'login failed!');

        return redirect('/login');
    }

    public function create(Request $request)
    {
        $credentials = $request->validate([
            "name" => ['required'],
            "email" => ['required', 'unique:users'],
            "telephone" => ['required'],
            "password" => ['required', 'min:8'],
        ], [
            'password.min' => 'Password harus memiliki minimal 8 karakter.',
        ]);
        
        
        $request["role"] = 'user';
        $request["password"] = Hash::make($request->password);
        $register = User::create($request->all());
        
        return redirect('/login');
    }   

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
