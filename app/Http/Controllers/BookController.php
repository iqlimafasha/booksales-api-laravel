<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index() {
        $bookModel = new Book();
        $books = $bookModel->getBooks();
        
        return view('books', ['books' => $books]);
    }
}
