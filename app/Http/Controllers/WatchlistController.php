<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Movie;
use App\Models\Review;
use App\Models\Watchlist;
use App\Models\Watchlistitem;

class WatchlistController extends Controller
{
    public function store(Request $request)
    {
        $user_id = $request->session()->get('LoggedUser');

        if (null === User::find($user_id)->watchlist) {

            $watchlist = new Watchlist();
            $watchlist->user_id = $request->session()->get('LoggedUser');

            $watchlist->save();
            return redirect('watchlist');
        }
    }

    public function show(Request $request)
    {
        $user_id = $request->session()->get('LoggedUser');    
        $watchlist = User::find($user_id)->watchlist; 
        $watchlistitems = Watchlistitem::where('watchlists_id', $watchlist->id)->get();
        
        if ($watchlistitems->isEmpty()) {
            $movies = [];
            return view('watchlist', array('movies' => $movies));
        } else {
            $movie = Movie::find($watchlistitems[0]->movies_id);
        }
        
        $movies = [];
        for ($i=1; $i < count($watchlistitems); $i++) {
            $movies[$i] = Movie::find($watchlistitems[$i]->movies_id);
        }
        
        $reviews = User::find($user_id)->review;
        $ratings = User::find($user_id)->rating;
        
        return view('watchlist', array('movies' => $movies, 'movie' => $movie, 'reviews' => $reviews, 'ratings' => $ratings));
    }

    public function destroy(Request $request, $id)
    {
        $user_id = $request->session()->get('LoggedUser');
        $watchlist = User::find($user_id)->watchlist;
        $watchlistitems = Watchlistitem::where('watchlists_id', $watchlist->id)->where('movies_id', $id)->get();

        for ($i=0; $i < count($watchlistitems); $i++) {
            $watchlistitem_id = Watchlistitem::findorfail($watchlistitems[$i]->id);
            $watchlistitem_id->delete();
        }
        
        return redirect('watchlist');
    }
}
