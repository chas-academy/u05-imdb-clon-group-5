<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Movie;
use App\Models\Genre;


class SearchController extends Controller
{
    public function search(Request $request)
    {
        // Take input data and search database table movies
        $search = $request->search;
        $tests = Movie::where('title', 'LIKE', "%$search%")->first();

        if ($tests) {
            return redirect()->route('movie', ['id' => $tests->id]);
        } else {
            return view('searchfail', array('search' => $search));
        }
    }
}
