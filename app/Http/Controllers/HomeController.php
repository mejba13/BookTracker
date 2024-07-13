<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homepage()
    {
        $books = Book::latest()->Paginate(4);
        return view('homepage', [
            'books' => $books,
        ]);
    }
}
