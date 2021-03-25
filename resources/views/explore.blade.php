

 <div class="overflow-x-hidden relative m-auto bg-midnight">
            <!-- Body -->
 <div class="movie-info border-b border-gray-800">

<!-- Explore all Genres -->

   <div class="container mx-auto my-8 lg:px-8 pt-4 px-2">
         <div class="Explore-all-Genres">
           <h2 class="uppercase font-semibold mt-2 text-white text-sm sm:text-2xl lg:text-3xl x5:text-4xl">Explore all Genres</h2>
           
          

<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-6 justify-start mb-1 px-1 overflow-hidden relative">
  
   @foreach($infoMovies as $infoMovie)
    
   
    <div class="py-5">
    <a href="/movie/{{$infoMovie->id}}" class="relative group block mr-4 flex-shrink-0">
        <div class="absolute inset-0 bg-black opacity-75 hidden group-hover:flex flex-col justify-end text-white px-4 py-4 cursor-pointer"> 
            <div>
                <h3 class="text-lg mb-2">{{$infoMovie->title}}</h3>
                
            </div>
        </div>
           
        <img class="w-36 h-48" src="{{$infoMovie->img}}" alt="{{$infoMovie->title}}">
        
    </a>
    </div>
    
@endforeach

</div>



<!-- Watchlist -->
<div class="container mx-auto my-8 font-alt text-white text-center md:px-0 px-4">
         <div class="TOP Watchlist">
           <h2 class="uppercase font-semibold mt-2 text-white text-sm sm:text-2xl lg:text-3xl x5:text-4xl">TOP Watchlist this month</h2>
           


<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-6 justify-start mb-1 px-1 overflow-hidden relative">
      
      @foreach($watchlist as $data)

 <div class="py-5">
    <a href="/movie/{{$data->id}}" class="relative group block mr-4 flex-shrink-0">

        <div class="absolute inset-0 bg-black opacity-75 hidden group-hover:flex flex-col justify-end text-white px-4 py-4 cursor-pointer"> 
            <div>
                <h3 class="text-lg mb-2"></h3>
                
            </div>
        </div>

        <img class="w-36 h-48" src="{{$data->img}}">
    </a>
    </div>
@endforeach

    

         </div>
  </div>
  