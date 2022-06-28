<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $movies = Movie::all();
        return view('movies',compact('movies'));
    }


    // public function movies() {
    //     $movies = Movie::all();
    //     return view('movies', compact($movies));
    // }
}


