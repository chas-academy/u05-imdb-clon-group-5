<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Watchlist;

class WatchlistController extends Controller
{
    public function show()
    {
        $user_id = 1;
        $watchlist = Watchlist::all()->where('user_id', $user_id);
        dd($watchlist);
        
    }
}
