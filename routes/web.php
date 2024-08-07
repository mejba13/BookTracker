<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SessionController;
use App\Models\Book;
use Illuminate\Support\Facades\Route;



// Pages
Route::get('/',[HomeController::class,'homepage'] )->name('homepage');
Route::get('/about',[BookController::class,'about'])->name('pages.about');
Route::get('/contact',[ContactController::class,'contact'])->name('pages.contact');

Route::get('/books',[BookController::class,'index'])->name('books.index');
Route::get('/books/add-book',[BookController::class,'create'])->name('books.add-book');
Route::get('/books/{book}',[BookController::class,'show'])->name('books.product-page');

// Guest

Route::middleware('guest')->group(function(){
    //Auth
    Route::get('/register',[RegisterUserController::class,'create'])->name('register');
    Route::post('/register',[RegisterUserController::class,'store'])->name('register');
    Route::get('/login',[SessionController::class,'create'])->name('login');
    Route::post('/login',[SessionController::class,'store'])->name('login');

});

//Auth

Route::middleware('auth')->group(function(){

    Route::get('/books/{book}/edit',[BookController::class,'edit'])->name('books.edit-book');
    Route::post('/books/{book}',[BookController::class,'update'])->name('books.edit-book');;
    Route::post('/logout',[SessionController::class,'destroy'])->name('logout');

});

