
<main class="max-w-screen-xl m-auto pb-24">
    
<h2 class="uppercasev font-inter font-semibold mt-10 text-center text-red-500 text-2xl sm:text-3xl lg:text-4xl">Explore all Genres</h2>
           
<section class="flex justify-center flex-wrap mt-6">

@foreach($infoMovies as $infoMovie)
        <a href="/movie/{{$infoMovie->id}}">       
            <img class="w-36 h-48 m-1.5" src="{{$infoMovie->img}}" alt="{{$infoMovie->title}}">
        </a>
@endforeach

</section>

</main>