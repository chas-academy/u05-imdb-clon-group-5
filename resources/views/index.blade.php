@extends('layout/layout')
@section('content')
  {{--   Heropage --}}
<div class="relative m-auto bg-midnight">
    <img class="w-full h-full" src="../img/hero-page-bg.jpg">


        <img class="w-11/12 h-11/12 inset-center" src="../img/hero-movie-bg.svg">
      
        <div class="w-11/12 h-11/12 inset-center">

            <div class="ml-2 md:ml-4 lg:ml-8 h-full mb-20  sm:mb-36" id="home-text-containers">
                <h1 class="font-black tracking-wider uppercase text-white text-2xl sm:font-inter sm:text-5xl lg:text-6xl xl:text-8xl">
                    extraction</h1>
                <h3 class="uppercase font-semibold mt-1 text-white text-sm sm:text-2xl lg:text-3xl xl:text-4xl">official trailer</h3>
                <h4 class="uppercase font-semibold text-white text-xs sm:text-2xl lg:text-3xl xl:text-4xl">3:02</h4>
               <div class="lg:mt-6 sm:mt-3">
                <a href="https://www.youtube.com/watch?v=L6P3nI6VnlY&t=1s" class="px-2 py-1 mt-3 font-normal tracking-wide text-xs
                text-white capitalize transition-colors duration-200
                transform bg-blue-600 rounded-md dark:bg-gray-800
               hover:bg-blue-500 dark:hover:bg-gray-700 focus:outline-none
                focus:bg-blue-500 dark:focus:bg-gray-700 sm:px-6 sm:py-2 lg:px-12 lg:py-2 xl:px-14 xl:py-3 xl:text-2xl">
               PLAY
           </a>
               </div>

        </div>
    </div>
    
    
</div> 
{{-- carousel-featured-now --}}
<div class="ml-2">
<h1 class="font-bold text-4xl font-inter text-red-500  sm:text-5xl">Featured</h1>
<h1 class="text-white text-4xl font-inter sm:text-5xl">
    <span class="font-bold">Now</span>
     showing</h1>
    </div>
<div>
    <x-img-carousel data="2" :movies="$movies"/>
</div>
              
</div>

{{-- carousel-top-rated --}}
<div class="ml-2">
<h1 class="font-bold font-inter text-4xl text-red-500 mt-4 sm:text-5xl">Top rated</h1>
<h1 class="text-white text-4xl font-inter sm:text-5xl">
    <span class="font-bold uppercase">movies</span>
     </h1>
</div>
<x-img-carousel data="1" :movies="$movies"/>

<x-img-carousel data="3" :movies="$movies"/>

        


<x-img-carousel data="2" :movies="$movies"/>
        



@endsection




