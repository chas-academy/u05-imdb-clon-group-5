@extends('layout/layout')
@section('content')
  <div class="flex flex-col p-2">
    <div class="text-white font-bold mt-8 flex flex-col items-center">
      <h1 class="text-5xl font-inter">Watchlist</h1>
      <ul class="flex mt-4 font-poppins text-base bg-dianne rounded">
        <li class="mx-4 my-1 p-2 bg-midnight rounded-lg">Genre</li>
        <li class="my-1 p-2 bg-midnight rounded-lg">Rating</li>
        <li class="mx-4 my-1 p-2 bg-midnight rounded-lg">Release</li>
      </ul>
    </div>
  
    <div class="flex text-white bg-dianne mt-4 mb-4 rounded">
      <div class="flex-1">
        <span class="w-36 h-6 absolute bg-green-700 font-inter text-center font-bold text-white">+ Watchlist</span>
        <img class="w-36 h-48" src="{{ $movie->img }}" alt="movie-poster">
      </div>
      <ul class="flex-1">
        <li class="font-bold text-base">{{ $movie->title }}</li>
        <li>{{ $movie->rating }}</li>
        <li class="text-sm line-clamp-1">{{ $movie->description }}</li>
        <li>Your review</li>
        <li>your review text</li>
      </ul>
    </div>
  
    <div class="flex flex-wrap justify-center bg-dianne p-1 rounded">
      @foreach ($movies as $movie)
        <div class="flex-initial relative m-0.5">
          <span class="w-36 h-6 absolute bg-green-700 font-inter text-center font-bold text-white">+ Watchlist</span>
          <img class="w-36 h-48" src="{{ $movie->img }}" alt="movie-poster">
        </div>
      @endforeach
    </div>
  </div>
@endsection