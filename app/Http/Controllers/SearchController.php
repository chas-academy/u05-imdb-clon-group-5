<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Movie;

class SearchController extends Controller
{

    public function search(Request $request)
    {
        // Take input data and search database table movies
        $search = $request->search;
        $tests = Movie::where('title', $search)->first();
        // $results = DB::table('movies')
            // ->where('title', 'LIKE', "%$search%");
        // ->orwhere('description', 'LIKE', "%$search%");
        // dd($test);

    //     if($posts ?? ''->isNotEmpty())
    //     foreach ($posts ?? '' as $post)
    //         <div class="post-list">
    //             <p>{{ $post->title }}</p>
    //             <img src="{{ $post->image }}">
    //         </div>
    //     foreach
    // else 
    //     <div>
    //         <h2>No posts found</h2>
    //     </div>
    // if
        // return view('search', array('tests' => $tests));
        return Redirect::to(URL::previous());
    }
}
