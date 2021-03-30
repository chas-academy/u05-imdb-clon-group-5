<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    // function search(Request $request)
    // {
    //     $search = $request->input('search');
    //     $posts = Post::query()
    //         ->where('title', 'LIKE', "%{$search}%")
    //         ->orWhere('body', 'LIKE', "%{$search}%")
    //         ->get();
    //     return view('search', compact('posts'));
    // }


    // public function search()
    // {
    //     $Search_text = $_GET['searchQuery'];
    //     $Search = Search::Where('title','LIKE', '%'.$Search_text. '%')->get();

    //     return view('')
    // }

    
//     if (request()->query('search')) {
//         // $post = Post::where('title','LIKE', '%'.$Search_text. '%')->get();
//         dd(request()->query('query'));
//     }


// function search(Request $request) {
//     $search = $re8quest->get('search');
//     $post = DB::table('post')->where('title', 'like', '%' .search. '%')->get();
//     return view('search', ['post' => $post]);
// }

public function search(Request $request)
{
    // Take input data ($request->input) and search database table movies
    $search = $request->input;
    $results = DB::table('movies')
        ->where('title', 'LIKE', "%$search%")
        ->get();

    return $results;

}

}