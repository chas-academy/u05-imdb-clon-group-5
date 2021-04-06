<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;
use App\Models\Movie;
use App\Models\Watchlistitem;

class WatchlistController extends Controller
{
    public function store(Request $request, $id)
    {
        $watchlists = Auth::user()->watchlist;
        $searchMovie = Watchlistitem::where('watchlists_id', $watchlists->id)->where('movies_id', $id)->get();

        if ($searchMovie->isEmpty()) {
            $watchlistitem = new Watchlistitem();
            $watchlistitem->watchlists_id = $watchlists->id;
            $watchlistitem->movies_id = $id;
            $watchlistitem->save();
        }

        return Redirect::to(URL::previous());
    }

    public function show()
    {
        $watchlist = Auth::user()->watchlist;
        $watchlistitems = Watchlistitem::where('watchlists_id', $watchlist->id)->get();

        if ($watchlistitems->isEmpty()) {
            $movies = [];
            return view('watchlist', array('movies' => $movies));
        } else {
            $movie = Movie::find($watchlistitems[0]->movies_id);
        }

        $movies = [];
        for ($i = 1; $i < count($watchlistitems); $i++) {
            $movies[$i] = Movie::find($watchlistitems[$i]->movies_id);
        }

        $reviews = Auth::user()->review;
        $ratings = Auth::user()->rating;

        return view('watchlist', array('movies' => $movies, 'movie' => $movie, 'reviews' => $reviews, 'ratings' => $ratings));
    }

    public function destroy($id)
    {
        $watchlist = Auth::user()->watchlist;
        $watchlistitems = Watchlistitem::where('watchlists_id', $watchlist->id)->where('movies_id', $id)->get();

        for ($i = 0; $i < count($watchlistitems); $i++) {
            $watchlistitem_id = Watchlistitem::findorfail($watchlistitems[$i]->id);
            $watchlistitem_id->delete();
        }

        return Redirect::to(URL::previous());
    }
}
