<?php

namespace App\Http\Controllers;

use App\Book;
use App\Http\Resources\Book as BookResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function index()
    {
        return BookResource::collection(Book::all());
    }

    public function show(Book $book)
    {
        return new BookResource($book->load(['authors', 'publishers']));
    }

    public function search($query, $offset = null, $limit = null)
    {
        return Book::all()->skip($offset)->take($limit);
    }
}
