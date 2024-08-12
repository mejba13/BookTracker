<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Mail\BookAdded;
use App\Mail\Bookupdated;
use App\Models\Book;
use App\Models\User;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Auth\Access\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rules\File;

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

    public function about() {
        return view('pages.about');
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
    public function store(Request $request)
    {

        $bookAttributes = $request->validate([
            'title' => 'required|string',
            'author' => 'required|string',
            'price' => 'required|numeric',
            'published_date' => 'required|date',
            'isbn' => 'required|string',
            'book_cover_image' => ['required', File::types('png','jpg', 'webp')]
        ]);

        // Handle file upload
        if ($request->hasFile('book_cover_image')) {
            $attachmentPath = $request->file('book_cover_image')->store('book_cover_images', 'public');
        } else {
            return back()->withErrors(['book_cover_image' => 'File upload failed.']);
        }

        $book = Book::create($bookAttributes);

        // Save book cover image path
        $book->update(['book_cover_image' => $attachmentPath]);

        // Send the email

        Mail::to('mejba.13@gmail.com')->send(new BookAdded($book));

        return redirect('/books')->with('success', 'Book created successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show( Book $book)
    {
        //
        return view('books.product-page',['book'=>$book]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        return view('books.edit-book', ['book'=>$book]);
    }

    /**
     * Update the specified resource in storage.
     * @throws AuthorizationException
     */
    public function update(Book $book)
    {
        // Validate the request data

        $validatedData = request()->validate([
            'title' => 'required',
            'author' => 'required',
            'price' => ['required', 'numeric'],
            'book_cover_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Optional image validation
            'published_date' => 'required',
            'isbn' => 'required',
        ]);

        // Handle file upload if it exists

        if (request()->hasFile('book_cover_image')) {
            // Store the uploaded file and get its path
            $attachmentPath = request()->file('book_cover_image')->store('book_cover_images', 'public');

            // Update the book cover image path
            $validatedData['book_cover_image'] = $attachmentPath;
        }

        // Update the book record with validated data

        $book->update($validatedData);

       // Send the email

        Mail::to('mejba.13@gmail.com')->send(new Bookupdated($book));

        // Redirect to the updated book's page

        return redirect('/books/'.$book->id)->with('success', 'Book updated successfully!');

    }

    /**
     * Remove the specified resource from storage.
     * @throws AuthorizationException
     */
    public function destroy(Book $book)
    {
       $book->delete();
       return redirect('/books');
    }
}
