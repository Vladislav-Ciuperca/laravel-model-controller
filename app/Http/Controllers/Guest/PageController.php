<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Movies;

class PageController extends Controller
{
    public function home()
    {



        $movies = movies::all();



        $dati = [
            "store" => config("data"),
            "movies" => $movies,
        ];

        return view('home', $dati);
    }
}
