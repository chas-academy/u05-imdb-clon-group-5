@extends('layout/layout')
@section('content')
  <div>
    <h1>Watchlist</h1>
    <ul>
      <li>Genre</li>
      <li>Rating</li>
      <li>Release</li>
    </ul>
  </div>

  <div>
    <img src="#" alt="">
    <ul>
      <li>title</li>
      <li>rating</li>
      <li>description</li>
      <li>Your review</li>
      <li>your review text</li>
    </ul>
  </div>

  <div>
    @foreach ($watchlistitems as watchlistitem)
      <div>
        <span>+ watchlist</span>
        <img src="{{ watchlistitem->movies_id }}" alt="movie-poster">
      </div>
    @endforeach

  </div>
@endsection