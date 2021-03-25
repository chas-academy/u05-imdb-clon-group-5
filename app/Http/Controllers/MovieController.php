<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MovieController extends Controller
{

   public function movieCarousel()
    {       
        
      $infoMovies = DB::select('  SELECT * FROM movies LIMIT 12');
      $watchlist = DB::select('  SELECT * from watchlistitems join movies on watchlistitems.movies_id=movies.id limit 12');

         $movies = DB::select('select * from movies');
         return view('index', ['movies' => $movies, 'infoMovies' => $infoMovies, 'watchlist' => $watchlist]); 
      
       /*  components.img-carousel */
        
        
    }   
    
}
