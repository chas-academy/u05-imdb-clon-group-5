@extends('layout/layout')
@section('content')
  {{--   Heropage --}}
  <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
    <div class="flex flex-col items-center justify-between w-full mb-10 lg:flex-row">
      <div class="mb-16 lg:mb-0 lg:max-w-lg lg:pr-5">
        <div class="max-w-xl mb-6">
          <div>
            <p class="inline-block text-red-600 py-px mb-4 text-xs font-semibold tracking-wider uppercase rounded-full">
              Brand new Movies
            </p>
          </div>
          <h2 class="max-w-lg mb-6 font-poppins text-3xl text-gray-200 font-bold tracking-tight sm:text-4xl sm:leading-none ">
            <span class="uppercase">Find Your Movie</span><br class="hidden md:block" />
            Search, View, 
            <span class="inline-block text-red-600">&nbsp;Review</span>
          </h2>
          <p class="text-base text-gray-200 md:text-lg">
            Movie Database is a new movie database on the Internet. Our focus is on English-language films, but also contains information on non-English films, low-budget and television films, TV series.
          </p>
        </div>
       
      </div>
      <div class="flex items-center justify-center lg:w-1/2">
        <div class="w-2/5">
          <img class="object-cover" src="../img/iphone-12-silver-prisoner.png" alt="Prisoners movie poster" />
        </div>
        <div class="w-5/12 -ml-16 lg:-ml-32">
          <img class="object-cover" src="../img/iphone-12-silver-birds-of-prey.png" alt="birds of prey movie poster" />
        </div>
      </div>
    </div>
    <a
      href="#scroll-down"
      aria-label="Scroll down"
      class="flex items-center justify-center w-10 h-10 mx-auto text-gray-600 duration-300 transform border border-gray-400 rounded-full hover:text-deep-purple-accent-400 hover:border-deep-purple-accent-400 hover:shadow hover:scale-110"
    >
      <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="currentColor">
        <path d="M10.293,3.293,6,7.586,1.707,3.293A1,1,0,0,0,.293,4.707l5,5a1,1,0,0,0,1.414,0l5-5a1,1,0,1,0-1.414-1.414Z"></path>
      </svg>
    </a>
  </div>


{{-- carousel-featured-now --}}



 <div class="ml-2">
<h1 class="font-bold text-4xl font-inter text-red-500  sm:text-5xl">Featured</h1>
<h1 id="scroll-down" class="text-white text-4xl font-inter sm:text-5xl">
    <span class="font-bold">Now</span>
     showing</h1>
    </div>
<div>
    <x-img-carousel data="2" :movies="$movies"/>
</div>
<div class="ml-2">
    <h1 class="font-bold font-inter text-4xl text-red-500 mt-4 sm:text-5xl">Top rated</h1>
    <h1 class="text-white text-4xl font-inter sm:text-5xl">
        <span class="font-bold uppercase">movies</span>
         </h1>
    </div> 
    <x-img-carousel data="3" :movies="$movies"/>

    

    

</div>


@include('raise_your_awareness')


@endsection




