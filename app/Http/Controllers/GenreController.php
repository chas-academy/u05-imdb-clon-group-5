<?php

namespace App\Http\Controllers;

use App\Models\Genreitem;
use App\Models\Genre;

class GenreController extends Controller
{
    public function allGenre()
    {
        $genres = Genre::all();
        return $genres;
    }
    public function genreList()
    {
        $genreitems = $this->allGenre();
        return view('genre-list', array('genres' => $genreitems));
    }

    public function genre()
    {

        $genreitems = $this->allGenre();
        Genreitem::where('genres_id', $genreitems)->get();
        return view('genre', array('genres' => $genreitems));
    }
}
