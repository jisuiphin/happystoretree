<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
class CategoryController extends Controller
{
    public function index()
    {
        $req = request("category");

        $bookCat = Book::join('categories', 'books.category_id', '=', 'categories.id')->join('details', 'details.book_id', 'books.id')
            ->where('categories.category', 'like', '%' . $req . '%')
            ->get();

        $navCat = Category::all();

        return view('categorybook', [
            'title' => $req,
            'active' => $req,
            'categories' => $bookCat,
            'navCat' => $navCat
        ]);
    }
}

