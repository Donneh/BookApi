<?php

namespace App\Http\Controllers;

use App\Author;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        return Author::all();
    }

    public function show(Author $author)
    {
        return $author;
    }
}
