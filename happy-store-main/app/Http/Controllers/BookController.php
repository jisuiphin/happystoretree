<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::join('details', 'details.book_id', 'books.id')->get();
        $navCat = Category::all();

        return view("home", [
            "title" => "Home",
            "active" => "home",
            'books' => $books,
            'navCat' => $navCat
        ]);
    }

    public function show($id)
    {
        $book = Book::join('details', 'details.book_id', 'books.id')->where('books.id', $id)->first();
        $navCat = Category::all();

        return view("detailbook", [
            "title" => $book->title,
            "active" => "book",
            'book' => $book,
            'navCat' => $navCat
        ]);
    }
}
