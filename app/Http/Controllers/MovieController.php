<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{ 
  function index() {

    $movies = Movie::all();
    // dump(Movie::all());
    // dump($movies);

    return view('movies.index', compact('movies'));
  }
}
