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
      $moviesFromDB = $this->movies();
      return view('index', ['movies' => $moviesFromDB]);
   }
}
