


  
     {{-- @if ($ShowTopRatedMovies <= 1)
        <h1 class="text-white">Show top rated movies</h1>
        @else
            <h1 class="text-white">don't show top reated movies</h1>
        
    @endif  --}}
<div class="w-full overflow-hidden relative">

        <span id="left-arrow" class="absolute top-1/4 left-1 text-6xl font-inter font-bold text-white cursor-pointer z-10  ">&#139</span>
        <span id="right-arrow" class="absolute top-1/4 right-1 text-6xl font-inter font-bold text-white cursor-pointer z-10 ">&#155</span>
                  
            <section class="scrollbar-hide w-ful mx-auto flex justify-start overflow-x-auto ">
                @foreach ($movies as $movie)
                <div class="imgSlide bg-midnight-800   min-w-max relative left-0 text-center font-bold my-3 mr-4 text-white duration-75">
                    <img class="w-36 h-48" src="{{$movie->img}}">
                    <h4 class="text-xs text-left px-1 py-1">&#9734 5</h4>
                    <h1 class="text-left text-xs px-1 font-inter font-bold">{{$movie->title }}</h1>
                    <div class="flex mt-2 px-1">
                    {{--   //fix the ankor tag so it will link to that move Trailer --}}
                        <a class="text-xs font-poppins font-light" href="#">Trailer</a>
                         {{--  // fix the ankor tag so i will link to that movie   --}}
                        <a  class="text-xs pl-9 font-poppins font-light" href="#">read more</a>
                    </div>
                    
                </div>
          
                
                @endforeach
            
               
                
                
