<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{

    // Method login

    public function login()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->route('santri.index');
        }

        return redirect()->back();
    }




    // Method register

    public function register()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $user = new \App\Models\User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();


        return redirect()->route('santri.index');
    }
}
