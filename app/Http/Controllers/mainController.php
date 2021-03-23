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
use App\Models\Movie;
use App\Models\GenreMovie;
use App\Models\Genre;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class mainController extends Controller
{

    //
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
    //Thommi - dsjfhdsjfhdsfjs
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

    //WARNING!!
    //Remember all functions added here are the ones inside web authCheck!
    //SELECT * FROM genre_movie INNER JOIN movies ON genre_movie.genre_id = movies.id ORDER BY genre_movie.genre_id DESC

    function mInfo() {
        //
        $infoMovies = DB::select('  SELECT movies.title,  genre_movie.genre_id
                                    FROM movies
                                    JOIN genre_movie
                                    ON movies.id = genre_movie.id
                                    WHERE genre_movie.genre_id=1');

        return view('movie-info', ['infoMovies' => $infoMovies]);
    }


    public function getPage($id) {


        $page1 = Movie::findOrFail($id);
        $page2 = GenreMovie::findOrFail($id);
        $page3 = Genre::findOrFail($page2->genre_id);

        return view('movie-info', array('page' => $page1, 'page3' => $page3));

        // $page1 = Movie::findOrFail($id);
        // $page2 = GenreMovie::findOrFail($id);

        // $page3 = Genre::findOrFail($page2->genre_id);

        // $page1 = Movie::where('id', $id);
        // $page1 = $page1->findOrFail($id);
        // $page3 = DB::select("SELECT  movies.title,
        //                             genre_movie.genre_id,
        //                             movies.description,
        //                             movies.director,
        //                             movies.writer
        //                             FROM movies
        //                             JOIN genre_movie
        //                             ON movies.id = $id");
        // // dd($page3);
        // return view('movie-info', array('page1' => $page1, 'page3' => $page3));
        //return view($page->template)->with('page', $page);
    }

}
