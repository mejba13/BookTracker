<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterUserController extends Controller
{
   public function create(){
       return view('auth.register');
   }

  public function store(){
       $attributes = request()->validate([
           'first_name' => ['required', 'string', 'max:255'],
           'last_name' => ['required', 'string', 'max:255'],
           'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
           'password' => ['required', 'string', 'min:6'],
       ]);

       //create user

      $user = User::create($attributes);

      auth()->login($user);

      return redirect('/');
  }
}
