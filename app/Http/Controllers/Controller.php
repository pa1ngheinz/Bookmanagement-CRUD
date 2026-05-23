<?php

namespace App\Http\Controllers;

use App\Models\Book;

abstract class Controller
{
    public function index() {
        $books = Book::all();

        return view('home', compact('books'));
    }
}
