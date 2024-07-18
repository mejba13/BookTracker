<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class,'homepage'] )->name('homepage');

Route::get('/books',[BookController::class,'index'])->name('books.index');
Route::get('/books/add-book',[BookController::class,'create'])->name('books.add-book');
Route::post('/books',[BookController::class,'store'])->name('books.add-book');
Route::get('/books/{book}',[BookController::class,'show'])->name('books.product-page');

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/contact',[ContactController::class,'index'])->name('pages.contact');

// Auth

Route::get('/register',[RegisterUserController::class,'create'])->name('register');
Route::post('/register',[RegisterUserController::class,'store'])->name('register');

Route::get('/login',[SessionController::class,'create'])->name('login');
Route::post('/login',[SessionController::class,'store'])->name('login');
Route::post('/logout',[SessionController::class,'destroy'])->name('logout');
