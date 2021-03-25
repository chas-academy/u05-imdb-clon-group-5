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
          <form id="delete-form" action="/watchlist/{{ $movie->id }}" method="POST">
            @csrf
            @method('DELETE')        
            <input class="w-36 h-6 absolute bg-mojo font-inter text-center font-bold text-white cursor-pointer" type="submit" name="delete" value="- Watchlist">
          </form>
          <img class="w-36 h-48 mr-1 sm:mr-4" src="{{ $movie->img }}" alt="movie-poster">
        </div>
        <ul class="flex-1 sm:flex-auto">
          <li class="font-bold text-base">{{ $movie->title }}</li>
          <li class="text-sm"><div class="flex items-center"><img class="object-none mx-0.5" src="../img/rating-star.png">{{ $movie->rating }}/10</div></li>
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
  
    @isset($movies)
      <div class="flex flex-wrap justify-center bg-dianne p-1 rounded">
        @foreach ($movies as $movie)
          <div class="flex-initial relative m-0.5">
            <!-- Delete button -->
              <form id="delete-form" action="/watchlist/{{ $movie->id }}" method="POST">
                @csrf
                @method('DELETE')        
                <input class="w-36 h-6 absolute bg-mojo font-inter text-center font-bold text-white cursor-pointer" type="submit" name="delete" value="- Watchlist">
              </form>
            <img class="w-36 h-48" src="{{ $movie->img }}" alt="movie-poster">
          </div>
        @endforeach
      </div>
    @endisset

  </div>
@endsection