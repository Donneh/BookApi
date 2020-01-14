<?php

namespace App\Http\Controllers;

use App\Author;
use App\Http\Controllers\Controller;
use App\Http\Resources\Author as AuthorResource;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        return AuthorResource::collection(Author::all());
    }

    public function show(Author $author)
    {
        return new AuthorResource($author->load('books'));
    }
}
