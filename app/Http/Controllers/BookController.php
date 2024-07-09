<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Mail\BookAdded;
use App\Models\Book;
use Illuminate\Support\Facades\Mail;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::latest()->Paginate(8);
        return view('books.index', [
            'books' => $books,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('books.add-book');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
         request()->validate([
            'title' => 'required',
            'author' => 'required',
            'price' =>  ['required', 'numeric'],
            'book_cover_image' => 'required',
            'published_date' => 'required',
            'isbn' => 'required',
        ]);

         $book = Book::create([
             'title' => request('title'),
             'author' => request('author'),
             'price' => request('price'),
             'book_cover_image' => request('book_cover_image'),
             'published_date' => request('published_date'),
             'isbn' => request('isbn'),
         ]);

         return redirect('/books');

    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookRequest $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        //
    }
}
