<?php
///////////////////////////////////////////////////////////////////
//* Add your name if you changed something                      *//
//* Contributors:                                               *//
//*     - Jorge Pereda                                          *//
//*     - ...                                                   *//
//* Do not forget to add the comments above the code you wrote! *//
///////////////////////////////////////////////////////////////////
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Review;
use App\Models\Movie;
use App\Models\GenreMovie;
use App\Models\Genre;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Watchlist;



class mainController extends Controller
{

    function login() {
        //
        return view('login');
    }
    function register() {
        //
        return view('register');
    }
    function save(Request $request) {
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
        if($imdb) {
            //
            return redirect('user');
        } else{
            //
            return back()->with('fail', 'Something went wrong, try again');
        }
    }
    function check(Request $request) {
        // return $request->input();
        $request->validate([
            'email'     =>  'required|email',
            'password'  =>  'required|min:5|max:12'
        ]);
        $userInfo   =   DB::table('users')
                            ->where('email', $request->email)
                            ->first();
        if(!$userInfo) {
            return back()->with('fail', 'You do not have any account');
        } else {
            //Checking password
            if ($request->password) {
                //
                $request->session()->put('LoggedUser', $userInfo->id);

                // Create new watchlist
                $user_id = $request->session()->get('LoggedUser');
                if (null === User::find($user_id)->watchlist) {

                    $watchlist = new Watchlist();
                    $watchlist->user_id = $request->session()->get('LoggedUser');

                    $watchlist->save();
                }

                return redirect('user');
            } else {
                //If the passsword is incorrect, then...
                return back()->with('fail','Incorrect password');
            }
        }
    }
    function logout(){
        //Just killing the session here :D
        if(session()->has('LoggedUser')) {
            session()->pull('LoggedUser');
            return redirect('login');
        }
    }
    
    //WARNING!!
    //Remember all functions added here are the ones inside web authCheck!
    
    function profile() {
        $data = ['LoggedUserInfo'=>User::where('id','=', session('LoggedUser'))->first()];
        return view('user.profile', $data);
    }
    function Settings() {
        $data = ['LoggedUserInfo'=>User::where('id','=', session('LoggedUser'))->first()];
        return view('user.settings', $data);
    }

    function myWatchs() {
        $data = ['LoggedUserInfo'=>User::where('id','=', session('LoggedUser'))->first()];
        return view('user.mywatchs', $data);
    }
    function myRatings() {
        $data = ['LoggedUserInfo'=>User::where('id','=', session('LoggedUser'))->first()];
        return view('user.myratings', $data);
    }
    function myMovies() {
        $data = ['LoggedUserInfo'=>User::where('id','=', session('LoggedUser'))->first()];
        return view('user.mymovies', $data);
    }
    
    
    //Extras
    
    public function getInfo($id) {
        $page = DB::select("SELECT  movies.id,
                                    movies.title,
                                    movies.director,
                                    movies.description,
                                    movies.writer,
                                    movies.year,
                                    movies.img,
                                    group_concat(concat(' <a href=''/genre/' , genres.genre , ''' class=''hover:underline italic''>' , genres.genre , '</a>')) AS genre
                                    FROM movies
                                    INNER JOIN genre_movie ON genre_movie.movie_id = movies.id
                                    INNER JOIN genres ON genre_movie.genre_id = genres.id WHERE movies.id = $id
                                    GROUP BY movies.id, movies.title, movies.year");
        return view('movie', array('page' => $page));
    }
    
    public function getGenre($id) {
        $genreList  =   DB::select('SELECT  movies.id,
                                            movies.title,
                                            movies.img,
                                            group_concat(genres.genre) AS genre
                                            FROM movies
                                            INNER JOIN genre_movie ON genre_movie.movie_id = movies.id
                                            INNER JOIN genres ON genre_movie.genre_id = genres.id WHERE genre_movie.genre_id='.$id.'
                                            GROUP BY movies.id, movies.title, movies.img');
        return view('genre', array('genreList' => $genreList));
    }

    function review() {
        //
        return view('review');
    }

    function store(Request $request)
    {
        $Review = new Review;
        $Review->title = $request->title;
        $Review->text = $request->text;
        $Review->user_id = $request->session()->get('LoggedUser');
        $Review->movie_id = !null;
        $Review->save();
        return redirect('movie')->with('status', 'Succsess');
    }

}
