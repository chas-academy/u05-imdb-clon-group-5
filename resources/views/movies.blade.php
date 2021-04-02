@extends('layout/layout')
@section('content')

    <div class="mt-8">

        <div class="carousel relative shadow-2xl bg-white">
            <div class="carousel-inner relative overflow-hidden w-full">
              <!--Slide 1-->
                <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
                <div class="carousel-item absolute opacity-0" style="height:50vh;">
                   
                     
                        <img  class="object-cover sm:object-none sm:object-top block h-full w-full bg-indigo-500 text-white text-5xl text-center" src="../img/justice.jpeg" alt="">
               
                </div>
                <label for="carousel-3" class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
                <label for="carousel-2" class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>
                
                <!--Slide 2-->
                <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
                <div class="carousel-item absolute opacity-0" style="height:50vh;">
               
                        <img class="object-cover sm:object-none sm:object-top block h-full w-full bg-orange-500 text-white text-5xl text-center" src="../img/rampage.jpeg" alt="">
                 
                </div>
                <label for="carousel-1" class="prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
                <label for="carousel-3" class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label> 
                
                <!--Slide 3-->
                <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
                <div class="carousel-item absolute opacity-0" style="height:50vh;">
                    
                        <img  class=" block h-full w-full bg-green-500 text-white text-5xl text-center" src="../img/breach.jpeg" alt="">
                    
                </div>
                <label for="carousel-2" class="prev control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
                <label for="carousel-1" class="next control-3 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>
        
                <!-- Add additional indicators for each slide-->
                <ol class="carousel-indicators">
                    <li class="inline-block mr-3">
                        <label for="carousel-1" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
                    </li>
                    <li class="inline-block mr-3">
                        <label for="carousel-2" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
                    </li>
                    <li class="inline-block mr-3">
                        <label for="carousel-3" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
                    </li>
                </ol>
                
            </div>
        </div>

        <style>
			
		</style>

    {{--  <video style="height: 500px" class="w-full" controls src=" ../img/thedig.mp4"></video> --}}
        {{-- top rated movies --}}
        <div class="xl:ml-5 ml-3 mb-5">
            <h1 class="font-bold font-inter text-4xl text-red-500 mt-4 sm:text-5xl">Top rated</h1>
            <h1 class="text-white text-4xl font-inter sm:text-5xl">
                <span class="font-bold uppercase">movies</span>
            </h1>
        </div>
        <x-img-carousel data="1" :movies="$movies" />


        {{-- featured movies --}}
        <div class="xl:ml-5 ml-3 mb-5">
            <h1 class="font-bold font-inter text-4xl text-red-500 mt-4 sm:text-5xl">Recommended</h1>
        </div>
        <x-img-carousel data="3" :movies="$movies" />




        @include('choosegenre')

    </div>


@endsection
