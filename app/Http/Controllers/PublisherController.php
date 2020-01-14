<?php

namespace App\Http\Controllers;

use App\Book;
use App\Http\Resources\Publisher as PublisherResource;
use App\Publisher;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    public function index()
    {
        return PublisherResource::collection(Publisher::all());
    }

    public function show(Publisher $publisher)
    {
        $publisher->load('books');
        return new PublisherResource($publisher);
    }
}
