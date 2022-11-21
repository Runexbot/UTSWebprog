<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function index(){
        $books = Book::all();
        return view('home', compact('books'));
    }

    public function detail($id){
        $book = Book::find($id);
        return view('bookdetail', compact('book'));
    }
}
