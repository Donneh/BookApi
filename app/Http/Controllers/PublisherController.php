<?php

namespace App\Http\Controllers;

use App\Book;
use App\Publisher;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    public function index()
    {
        return Publisher::all();
    }

    public function show(Publisher $publisher)
    {
        return $publisher;
    }
}
