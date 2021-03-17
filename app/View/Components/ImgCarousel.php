<?php

namespace App\View\Components;
use Illuminate\Support\Facades\DB;
use App\App\Http\Controllers\movieController;
use Illuminate\View\Component;

class ImgCarousel extends Component
{
   
    /**
     * Create a new component instance.
     *
     * @return void
     */
  
   public $movies;
    public function __construct( $movies)
    {
        //
  
       $this->movies = $movies;
           
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.img-carousel');
    }
}
