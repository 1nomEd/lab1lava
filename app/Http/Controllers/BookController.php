<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function index()
    {
        $booksHighestPrice = DB::table('books')->orderBy('price', 'desc')->limit(8)->get();
        $booksLowestPrice = DB::table('books')->orderBy('price', 'asc')->limit(8)->get();

        return view('index', compact('booksHighestPrice', 'booksLowestPrice'));
    }

    public function category($id)
    {
        $category = DB::table('categories')->where('id', $id)->first();
        $books = DB::table('books')->where('category_id', $id)->get();

        return view('category', compact('category', 'books'));
    }

    public function show($id)
    {
        $book = DB::table('books')->where('id', $id)->first();

        return view('show', compact('book'));
    }
}
