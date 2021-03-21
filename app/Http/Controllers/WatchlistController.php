<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Movie;
use App\Models\Watchlist;
use App\Models\Watchlistitem;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\DB;

class WatchlistController extends Controller
{
    public function show(Request $request)
    {
        $user_id = 9;
        // $id = null;
        // $todos = $request->session()->get('LoggedUser');
        // $user = User::all();
        // $watchlist = Watchlist::find($user_id);
        // $watchlist = \App\Models\User::find($user_id)->watchlist()->join('watchlistitems', 'watchlists_id',
        // 'movies_id')->select('movies_id')->get();
        $watchlist = User::find($user_id)->watchlist;
        // $watchlistId = watchlist[0]->id;

        // dd($watchlist->id);

        $watchlistitems = Watchlistitem::where('watchlists_id', $watchlist->id)->get();
        // $watchlistitems = Watchlistitem::all();



        // dd($watchlistitems);
        // $movies = [];
        // $movie = Movie::where('id', $watchlistitems[0]->movies_id)->get();
        $movie = Movie::find($watchlistitems[0]->movies_id);
        // $movies[] = array_push($movie);

        // $movie = Movie::where('id', $watchlistitems[1]->movies_id)->get();
        // $movies = [$movie[0]];


        $movies = [];
        for ($i=1; $i < count($watchlistitems); $i++) {
            // $movies[$i] = Movie::where('id', $watchlistitems[$i]->movies_id)->get();
            // $movies[] = array_push($movie);
            $movies[$i] = Movie::find($watchlistitems[$i]->movies_id);
        }

        // foreach ($watchlistitems as $watchlistitem) {
        //     $movie[] = Movie::where('id', $watchlistitem->movies_id)->get();
        //     // $movies[] = array_push($movie);
        // }
       
        // $movies = Movie::where('id', $watchlistitems[0]->movies_id)->get();

        // $movies = DB::table('movies')->where()
        
        // dd($movie);

        return view('watchlist', array('movies' => $movies, 'movie' => $movie));
        
    }

    public function destroy($id)
    {
        $user_id = 9;
        $watchlist = User::find($user_id)->watchlist;
        $watchlistitems = Watchlistitem::where('watchlists_id', $watchlist->id)->where('movies_id', $id)->get();

        for ($i=0; $i < count($watchlistitems); $i++) {
            $watchlistitem_id = Watchlistitem::findorfail($watchlistitems[$i]->id);
            $watchlistitem_id->delete();
        }

        // $watchlistitem_id = Watchlistitem::findorfail($watchlistitems[0]->id);
        // dd($watchlistitem_id);

        // $watchlistitem = Watchlistitem::findorfail($id);
        // $watchlistitems->delete();
        return redirect('watchlist');
    }
}
