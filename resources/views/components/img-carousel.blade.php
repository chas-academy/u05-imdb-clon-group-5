<div class="glide">
    <div class="glide__arrows" data-glide-el="controls">
        <button class="glide__arrow glide__arrow--left text-8xl" data-glide-dir="<">&#139</button>
        <button class="glide__arrow glide__arrow--right text-8xl" data-glide-dir=">">&#155</button>
    </div>
    <div class="glide__track" data-glide-el="track">
        <ul class="glide__slides">

            {{-- List all movies from database --}}
            @foreach ($movies as $movie)

            {{-- Check if we are sending variabel from to the component and if rating is grater or = 7
                    This is for top-rated now carousel --}}
            @if ($moviedata == 1 and $movie->rating >= 7 )

            <li class="glide__slide">
                <a href="/movie/{{$movie->id}}"><img class=" w-36 h-48" src="{{$movie->img}}" /></a>
            </li>


            {{-- Check if we are sending variabel from to the component
                    show featured movies this is all movies at this point --}}

            @elseif($moviedata == 2 and $movie->featured == 1)
            <li class="glide__slide">
                <div class="bg-midnight-800 w-36 min-w-max text-center font-bold text-white">
                    <a href="/movie/{{$movie->id}}"><img class="w-36 h-48" src="{{$movie->img}}" /></a>

                </div>
            </li>


            {{-- Check if we are sending variabel from to the component
                    show only movie img --}}
            @elseif($moviedata == 3)
            <li class="glide__slide">
                <div class="bg-midnight-800 w-36 min-w-max text-center font-bold text-white">
                    <a href="/movie/{{$movie->id}}"><img class="w-36 h-48" src="{{$movie->img}}" /></a>
                </div>
            </li>

            @endif

            @endforeach

        </ul>

    </div>

</div>