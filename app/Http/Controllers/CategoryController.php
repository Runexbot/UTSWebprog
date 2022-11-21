<?php

namespace App\Http\Controllers;

use App\Models\BookCategory;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function detail($id){
        $category = Category::find($id);
        return view('categorydetail', compact('category'));
    }
}
