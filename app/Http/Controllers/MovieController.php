<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MovieController extends Controller
{
   public function movies()
   {
      $movies = DB::select('select * from movies');
      return $movies;
   }
   public function movieCarousel()
   {

      $infoMovies = DB::select('  SELECT * FROM movies LIMIT 12');
      $watchlist = DB::select('  SELECT * from watchlistitems join movies on watchlistitems.movies_id=movies.id limit 12');

      $moviesFromDB = $this->movies();
      return view('index', ['movies' => $moviesFromDB, 'infoMovies' => $infoMovies, 'watchlist' => $watchlist]);
   }
}
