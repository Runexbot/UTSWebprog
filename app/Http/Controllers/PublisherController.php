<?php

namespace App\Http\Controllers;

use App\Models\Publisher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PublisherController extends Controller
{
    public function index(){
        $publishers = Publisher::all();
        return view('publisher', compact('publishers'));
    }

    public function detail($id){
        $publisher = Publisher::find($id);
        return view('publisherdetail', compact('publisher'));
    }
}
