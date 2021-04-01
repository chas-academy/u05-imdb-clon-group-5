<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Rating;
use App\Models\Review;
use App\Models\Movie;
use App\Models\GenreMovie;
use App\Models\Genre;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Genreitem;
use App\Models\Watchlist;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use App\http\Controllers\RatingController;



class mainController extends Controller
{

    function login()
    {
        //
        return view('login');
    }
    function register()
    {
        //
        return view('register');
    }
    function save(Request $request)
    {
        //Validating the request before sending.
        $request->validate([
            'name'      =>  'required',
            'email'     =>  'required|email|unique:users',
            'password'  =>  'required|min:5|max:12'
        ]);
        $imdb = DB::table('users')
            ->insert([
                'name'      =>  $request->name,
                'email'     =>  $request->email,
                'password'  =>  Hash::make($request->password)
            ]);
        if ($imdb) {
            //
            return redirect('/');
        } else {
            //
            return back()->with('fail', 'Something went wrong, try again');
        }
    }
    function check(Request $request)
    {
        $credentials = $request->only('email', 'password');

        // return $request->input();
        $request->validate([
            'email'     =>  'required|email',
            'password'  =>  'required|min:5|max:12'
        ]);
        $userInfo   =   DB::table('users')
            ->where('email', $request->email)
            ->first();
        if (!Auth::attempt($credentials)) {
            return back()->with('fail', 'You do not have any account');
        } else {
            //Checking password
            if ($request->password) {
                //
                $request->session()->put('LoggedUser', $userInfo->id);

                // Create new watchlist once
                $user_id = $request->session()->get('LoggedUser');
                if (null === User::find($user_id)->watchlist) {
                    $watchlist = new Watchlist();
                    $watchlist->user_id = $request->session()->get('LoggedUser');
                    $watchlist->save();
                }

                return redirect('/');
            } else {
                //If the passsword is incorrect, then...
                return back()->with('fail', 'Incorrect password');
            }
        }
    }
    function logout()
    {
        //Just killing the session here :D
        if (session()->has('LoggedUser')) {
            session()->pull('LoggedUser');
            Auth::logout();
            return redirect('/');
        }
    }

    //WARNING!!
    //Remember all functions added here are the ones inside web authCheck!

    function profile()
    {
        $data = ['LoggedUserInfo' => User::where('id', '=', session('LoggedUser'))->first()];
        return view('user.profile', $data);
    }
    function Settings()
    {
        $data = ['LoggedUserInfo' => User::where('id', '=', session('LoggedUser'))->first()];
        return view('user.settings', $data);
    }

    function myWatchs()
    {
        $data = ['LoggedUserInfo' => User::where('id', '=', session('LoggedUser'))->first()];
        return view('user.mywatchs', $data);
    }
    function myRatings()
    {
        $data = ['LoggedUserInfo' => User::where('id', '=', session('LoggedUser'))->first()];
        return view('user.myratings', $data);
    }
    function myMovies()
    {
        $data = ['LoggedUserInfo' => User::where('id', '=', session('LoggedUser'))->first()];
        return view('user.mymovies', $data);
    }




    public function getInfo($id)
    {
        $page = Movie::findorfail($id);
        $reviews = Review::where('movie_id', $id)->paginate(4);
        $genres = [];
        $genreitems = Genreitem::where('movies_id', $id)->get();
        for ($i = 0; $i < count($genreitems); $i++) {
            $genres[$i] = Genre::find($genreitems[$i])->first();
        }
        $ratings = [];
        for ($i = 0; $i < count($reviews); $i++) {
            $ratings[$i] = Rating::where('user_id', $reviews[$i]->user_id)->where('movies_id', $id)->first();
        }
        $userRatings = Auth::user()->rating;
        $userRating = null;
        for ($i = 0; $i < count($userRatings); $i++) {
            if ($userRatings[$i]->movies_id == $id) {
                $userRating = $userRatings[$i]->rating;
            }
        }
        if ($userRating == null) {
            return view('movie', array('page' => $page, 'reviews' => $reviews, 'ratings' => $ratings, 'genres' =>
            $genres));
        }

        return view('movie', array('page' => $page, 'reviews' => $reviews, 'ratings' => $ratings, 'genres' => $genres, 'userRating' => $userRating));
    }

    public function getGenre($id)
    {
        $genreList  =   DB::select('SELECT  movies.id,
                                            movies.title,
                                            movies.img,
                                            group_concat(genres.genre) AS genre
                                            FROM movies
                                            INNER JOIN genre_movie ON genre_movie.movie_id = movies.id
                                            INNER JOIN genres ON genre_movie.genre_id = genres.id WHERE genre_movie.genre_id=' . $id . '
                                            GROUP BY movies.id, movies.title, movies.img');
        return view('genre', array('genreList' => $genreList));
    }

    function review()
    {
        //
        return view('review');
    }

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
