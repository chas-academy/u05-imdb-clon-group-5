<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;



class SearchController extends Controller
{
    public function search(Request $request)
    {
        // Take input data and search database table movies
        $search = $request->search;
        $findResults = Movie::where('title', 'LIKE', "%$search%")->get();

        if ($findResults->count() == 1) {
            return redirect()->route('movie', ['id' => $findResults[0]->id]);
        } elseif ($findResults->count() > 1) {
            /*  dd($findResults); */
            return view('result', array('findResults' => $findResults, 'search' => $search));
        } else {
            return view('searchfail', array('search' => $search));
        }
    }
}
