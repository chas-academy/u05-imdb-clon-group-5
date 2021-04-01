@extends('layout/layout')
@section('content')
  <div class="flex flex-col items-center p-2">
    <div class="text-white font-bold mt-8 flex flex-col items-center">
      <h1 class="text-5xl font-inter">Watchlist</h1>
    </div>
  
    @isset($movie)
      <div class="flex text-white bg-dianne mt-4 mb-4 p-1 font-poppins gap-0.5 rounded max-w-screen-md">
        <div class="flex-1 sm:flex-none flex justify-end">
          <!-- Delete button -->
          <form class="delete-form" action="/watchlist/{{ $movie->id }}" method="POST">
            @csrf
            @method('DELETE')        
            <input class="w-36 h-6 absolute bg-mojo font-inter text-center font-bold text-white cursor-pointer" type="submit" name="delete" value="- Watchlist">
          </form>
          <a href="/movie/{{$movie->id}}"><img class="w-36 h-48 mr-1 sm:mr-4" src="{{ $movie->img }}" alt="movie-poster"></a>
        </div>
        <ul class="flex-1 sm:flex-auto">
          <li class="font-bold text-base"><a href="/movie/{{$movie->id}}">{{ $movie->title }}</a></li>
          <li class="flex text-sm">
            <div class="flex items-center">
              <img class="object-none mx-0.5" src="../img/rating-star.png">{{ $movie->rating }}/10
            </div>
            <div class="flex items-center ml-1">
              @foreach ($ratings as $rating)
                @if ($rating->movies_id === $movie->id)
                  User: <img class="object-none mx-0.5" src="../img/rating-star.png">{{ $rating->rating }}/10
                @endif
              @endforeach
            </div>          
          </li>
          <li class="text-sm line-clamp-3">{{ $movie->description }}</li>

          @foreach ($reviews as $review)
            @if ($review->movie_id === $movie->id)
              <li class="font-bold text-sm mt-3 mb-1">Your review</li>
              <li class="text-sm line-clamp-3">{{ $review->reviewText }}</li>
            @endif
          @endforeach
        </ul>
      </div>
    @endisset

    @empty($movie)
      <div class="flex flex-wrap justify-center bg-dianne p-1 rounded">
        <div class="flex flex-col justify-end">
          <h3 class="sm:text-5xl text-center font-inter">You haven't saved any movies yet</h3>         
          <img class="object-fit" class=" mr-1 sm:mr-4" src="../img/movie.png">
          
        </div>
      </div>
    @endempty
  
    @isset($movies)
      <div class="flex flex-wrap bg-dianne p-1 rounded">
        @foreach ($movies as $movie)
          <div class="flex-initial relative m-0.5">
            <!-- Delete button -->
              <form class="delete-form" action="/watchlist/{{ $movie->id }}" method="POST">
                @csrf
                @method('DELETE')        
                <input class="w-36 h-6 absolute bg-mojo font-inter text-center font-bold text-white cursor-pointer" type="submit" name="delete" value="- Watchlist">
              </form>
            <a href="/movie/{{$movie->id}}"><img class="w-36 h-48" src="{{ $movie->img }}" alt="movie-poster"></a>
          </div>
        @endforeach
      </div>
    @endisset
  </div>

  
@endsection