<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    public function index() {
        $all_movies = Movie::all();
        $data = [
            'lista_film' => $all_movies
        ];
        return view('movies')->with($data);
    }
}
