<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function registerIndex()
    {
        if(! auth()->check())
            return view('auth.register');
        return redirect()->route('home');
    }

    public function register(Request $request)
    {
        if(! auth()->check()){
            $user = User::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
            ]);
            auth()->loginUsingId($user->id);

            return redirect()->route('home');
        }
        return redirect()->route('home');
    }

    public function loginIndex()
    {
        if(! auth()->check())
            return view('auth.login');
        return redirect()->route('home');
    }


    public function login(Request $request)
    {
        if(! auth()->check()){
            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                // Authentication passed...

                return redirect()->route('home');
            }
            return redirect('login');
        }
        return redirect()->route('home');
    }

    public function logout()
    {
        if(auth()->check()){
            auth()->logout();
            return redirect()->route('home');
        }
    }
}
