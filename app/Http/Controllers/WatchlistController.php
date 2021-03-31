<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Movie;
use App\Models\Review;
use App\Models\Watchlist;
use App\Models\Watchlistitem;

class WatchlistController extends Controller
{
    // public function store(Request $request)
    // {
    //     $user_id = $request->session()->get('LoggedUser');

    //     if (null === User::find($user_id)->watchlist) {

    //         $watchlist = new Watchlist();
    //         $watchlist->user_id = $request->session()->get('LoggedUser');

    //         $watchlist->save();
    //         return redirect('watchlist');
    //     }
    // }

    public function store(Request $request, $id)
    {
        $user_id = $request->session()->get('LoggedUser');
        // $watchlists = User::find($user_id)->watchlist;
        $watchlists = Auth::user()->watchlist;
        // dd($watchlists);
        $searchMovie = Watchlistitem::where('watchlists_id', $watchlists->id)->where('movies_id', $id)->get();

        if ($searchMovie->isEmpty()) {
            $watchlistitem = new Watchlistitem();
            $watchlistitem->watchlists_id = $watchlists->id;
            $watchlistitem->movies_id = $id;
            $watchlistitem->save();
        }

        return Redirect::to(URL::previous());
    }

    public function show(Request $request)
    {
        // $user = Auth::check();
        // dd($user);
        $user_id = $request->session()->get('LoggedUser');    
        $watchlist = User::find($user_id)->watchlist; 
        // $watchlist = Auth::user()->watchlist;
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
        // $reviews = Auth::user()->review;
        $ratings = User::find($user_id)->rating;
        // $ratings = Auth::user()->rating;
        
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
