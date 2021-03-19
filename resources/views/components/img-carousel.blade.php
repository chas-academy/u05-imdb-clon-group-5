

  
   
<div class="w-full overflow-hidden relative"> 
        <span  class="left-arrow absolute top-1/4 left-1 text-6xl font-inter font-bold text-white cursor-pointer z-10  ">&#139</span>
        <span class="right-arrow absolute top-1/4 right-1 text-6xl font-inter font-bold text-white cursor-pointer z-10 ">&#155</span>
                  
            <section class="scrollbar-hide w-ful mx-auto flex justify-start overflow-x-auto ">
              
                {{-- List all movies from database --}}
                @foreach ($movies as $movie)
              
               {{-- Check if we are sending variabel from to the component and if rating is grater or = 7
                    This is for top-rated now carousel --}}
                @if ($moviedata == 1 and $movie->rating >= 7 )
                        <div class="imgSlide bg-midnight-800 min-w-max relative left-0 text-center font-bold my-3 mr-4 text-white duration-75">
                            <img class="w-36 h-48" src="{{$movie->img}}"> 
                            <h4 class="text-xs text-left px-1 py-1">&#9734 {{$movie->rating}}</h4>
                            <h1 class="text-left text-xs px-1 font-inter font-bold">{{$movie->title }}</h1>
                            <div class="flex mt-2 px-1">
                            <a class="text-xs font-poppins font-light" href="#">Trailer</a>
                            <a  class="text-xs pl-9 font-poppins font-light" href="#">read more</a>
                            </div>
                        </div>

                   
            
                {{-- Check if we are sending variabel from to the component
                    show featured movies this is all movies at this point --}}
                @elseif($moviedata == 2 and $movie->featured == 1)
                
                    <div class="imgSlide bg-midnight-800 h-72  min-w-max relative left-0 text-center font-bold my-3 mr-4 text-white duration-75">
                        <img class="w-36 h-48" src="{{$movie->img}}"> 
                        <h4 class="text-xs text-left px-1 py-1">&#9734 {{$movie->rating}}</h4>
                        <h1 class=" text-left text-xs px-1 font-inter font-bold w-32">{{$movie->title }}</h1>
                        <div class="flex mt-2 px-1">
                        <a class="text-xs font-poppins font-light" href="#">Trailer</a>
                        <a  class="text-xs pl-9 font-poppins font-light" href="#">read more</a>
                        </div>
                    </div>


                {{-- Check if we are sending variabel from to the component
                    show only movie img --}}
                @elseif($moviedata == 3)
                    <div class="imgSlide bg-midnight-800   min-w-max relative left-0 text-center font-bold my-3 mr-4 text-white duration-75">
                        <img class="w-36 h-48" src="{{$movie->img}}"> 
                    
                    </div>

                @endif

                @endforeach
            </section>

 </div>
            
               
                
                
