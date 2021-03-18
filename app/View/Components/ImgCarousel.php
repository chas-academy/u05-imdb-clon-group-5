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
    public $moviedata;
    public function __construct($movies,  string $data)
    {
        //
        $this->movies = $movies;
        $this->moviedata = $data;
 

           
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
