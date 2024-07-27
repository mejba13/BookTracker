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

//Job
Route::get('/books',[BookController::class,'index'])->name('books.index');
Route::get('/books/add-book',[BookController::class,'create'])->name('books.add-book');
Route::post('/books',[BookController::class,'store'])->name('books.add-book')->middleware('auth');
Route::get('/books/{book}',[BookController::class,'show'])->name('books.product-page');

Route::get('/books/{book}/edit',[BookController::class,'edit'])->middleware('auth')->name('books.edit-book');

Route::post('/books/{book}',[BookController::class,'update'])->name('books.edit-book');;
Route::delete('/books/{book}',[BookController::class,'destroy'])->name('books.edit-book');;

// Auth

Route::get('/register',[RegisterUserController::class,'create'])->name('register');
Route::post('/register',[RegisterUserController::class,'store'])->name('register');

Route::get('/login',[SessionController::class,'create'])->name('login');
Route::post('/login',[SessionController::class,'store'])->name('login')->middleware('auth');
Route::post('/logout',[SessionController::class,'destroy'])->name('logout');
