<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MovieController extends Controller
{

   public function movieCarousel()
    {       
        
         $movies = DB::select('select * from movies');
         return view('index', ['movies' => $movies]); 
      
       /*  components.img-carousel */
        
        
    }   
    
}
