<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use App\Models\Review;

class ReviewController extends Controller
{
    public function store(Request $request, $id)
    {
        //SUBMIT THE REVIEW
        $review = new Review;
        $review->reviewTitle = $request->title;
        $review->reviewText = $request->text;
        $review->user_id = $request->session()->get('LoggedUser');
        $review->movie_id = $id;
        $review->save();

        return Redirect::to(URL::previous());
    }
}
