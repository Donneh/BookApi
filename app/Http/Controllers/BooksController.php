<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index()
    {
        return Book::all();
    }

    public function show(Book $book)
    {
        return $book;
    }

    public function search($query)
    {
        return Book::where('title', 'LIKE', "%$query%")->get();
    }
}
