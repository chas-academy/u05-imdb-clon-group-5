<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Models\Movie;
use App\Models\Review;
use App\Models\Genreitem;
use App\Models\Genre;
use App\Models\Rating;
use App\Models\User;
use App\Models\Watchlistitem;

class MovieController extends Controller
{
   public function movies()
   {
      $movies = Movie::all();
      return $movies;
   }

   public function movieCarousel()
   {
      $infoMovies = Movie::all()->take(16);
      $moviesFromDB = $this->movies();
      return view('index', ['movies' => $moviesFromDB, 'infoMovies' => $infoMovies]);
   }

   // Show movie
   public function getInfo($id)
   {
      // Find movie and review
      $page = Movie::findorfail($id);
      $reviews = Review::where('movie_id', $id)->paginate(4);

      // Show genre
      $genres = [];
      $genreitems = Genreitem::where('movies_id', $id)->get();
      for ($i = 0; $i < count($genreitems); $i++) { 
         $genres[$i]=Genre::find($genreitems[$i])->first();
      }

      // Show reviews and rating for reviews
      $ratings = [];
      $review_users = [];
      for ($i = 0; $i < count($reviews); $i++) { 
         $ratings[$i]=Rating::where('user_id', $reviews[$i]->user_id)->where('movies_id', $id)->first();
         $review_users[$i] = User::where('id', $reviews[$i]->user_id)->first();
      }

      // Show logged-in user rating
      if (Auth::check()) {
         $userRatings = Auth::user()->rating;
         $userRating = null;
         for ($i = 0; $i < count($userRatings); $i++) { 
            if ($userRatings[$i]->movies_id == $id) {
               $userRating = $userRatings[$i]->rating;
            }
         }

         // Check if movie aleady in watchlist
         $watchlist = Auth::user()->watchlist;
         $checkWatchlist = Watchlistitem::where('watchlists_id', $watchlist->id)->where('movies_id', $id)->first();
         // dd($checkWatchlist);

         if ($checkWatchlist) {
            return view('movie', array('page' => $page, 'reviews' => $reviews, 'ratings' => $ratings, 'genres' =>
            $genres, 'userRating' => $userRating, 'review_users' => $review_users, 'checkWatchlist' => $checkWatchlist));
         }

         // Return with rating for logged-in user
         return view('movie', array('page' => $page, 'reviews' => $reviews, 'ratings' => $ratings, 'genres' =>
         $genres, 'userRating' => $userRating, 'review_users' => $review_users));
      }

      // Return without rating for logged-in user
      return view('movie', array('page' => $page, 'reviews' => $reviews, 'ratings' => $ratings, 'genres' =>
      $genres, 'review_users' => $review_users));
   }
}
