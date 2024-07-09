<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/books',[BookController::class,'index'])->name('books.index');
Route::get('/books/add-book',[BookController::class,'create'])->name('books.add-book');
Route::post('/books',[BookController::class,'store'])->name('books.add-book');


Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/contact', function () {
    return view('pages.contact');
});
