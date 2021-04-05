<?php

namespace App\Http\Controllers;

use App\Models\Genreitem;
use App\Models\Genre;
use App\Models\Movie;

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

    public function genre($id)
    {
        $genreInformation = Genre::find($id)->genre;

        $moviesgenre = [];
        $genreitems = Genreitem::where('genres_id', $id)->get();
        for ($i = 0; $i < count($genreitems); $i++) {
            $moviesgenre[$i] = Movie::find($genreitems[$i]->movies_id);
        }
        
        return view('genre', array('genres' => $genreitems, 'moviesgenres' => $moviesgenre, 'genreInformation' => $genreInformation));
    }
}
