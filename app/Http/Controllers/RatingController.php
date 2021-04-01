<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;
use App\Models\Rating;

class RatingController extends Controller
{
    public function store($id, Request $request)
    {
        // If rating exist: update rating
        $userRatings = Auth::user()->rating;    
        for ($i = 0; $i < count($userRatings); $i++) { 
            if ($userRatings[$i]->movies_id == $id) {
                
                $userRating = Rating::findorfail($userRatings[$i]->id);
                $userRating->rating = $request->input('rating');
                $userRating->user_id = Auth::id();
                $userRating->movies_id = $id;
                $userRating->save();
                
                return Redirect::to(URL::previous());
            }
        }

        $rating = new Rating();
        $rating->rating = $request->input('rating');
        $rating->user_id = Auth::id();
        $rating->movies_id = $id;
        $rating->save();

        return Redirect::to(URL::previous());
    }
}
