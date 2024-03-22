<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController
{
    public function index()
    {
        return view('login.index');
    }

    public function store(Request $request)
    {
        if(!Auth::attempt($request->only(['email', 'password']))) { // use the users provider (eloquent) to find the relative user to the credentials from the form login
            return redirect()->back()->withErrors(['Invalid user or password']);
        }

        return to_route('vacations.index');

    }

    public function destroy()
    {
        Auth::logout();

        return to_route('login');
    }
}