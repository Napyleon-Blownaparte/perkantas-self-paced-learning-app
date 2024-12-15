<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    

    public function show($id)
    {
        $book = Book::findOrFail($id);
        return view('books-show', compact('book'));
    }

}
