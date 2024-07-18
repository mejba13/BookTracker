<?php

namespace App\Http\Controllers;

use Cassandra\Exception\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function create(){
        return view('auth.login');
    }

    public function store(){
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(! Auth::attempt($attributes)){
            throw \Illuminate\Validation\ValidationException::withMessages([
                'email' => __('Sorry, there was an error while logging in.'),
            ]);
        }

        request()->session()->regenerate();
        return redirect('/books');
    }

    public function destroy(){
        auth()->logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/login');
    }
}
