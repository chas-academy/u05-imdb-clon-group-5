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
use Illuminate\Support\Facades\Hash;

class mainController extends Controller
{

    //
    function login()
    {
        return view('login');
    }
    function register()
    {
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

        //Inserting data into databese
        $addUser = new User;
        $addUser->name = $request->name;
        $addUser->email = $request->email;
        $addUser->password = Hash::make($request->password);
        $save = $addUser->save();

        if ($save) {
            //
            return redirect('user');
        } else {
            //
            return back()->with('fail', 'Something went wrong, try again');
        }
    }

    function check(Request $request)
    {
        // return $request->input();
        $request->validate([
            'email'     =>  'required|email',
            'password'  =>  'required|min:5|max:12'
        ]);

        $userInfo   =   User::where('email', '=', $request->email)->first();

        if (!$userInfo) {
            return back()->with('fail', 'You do not have any account');
        } else {
            //Checking password
            if (Hash::check($request->password, $userInfo->password)) {
                //
                $request->session()->put('LoggedUser', $userInfo->id);
                return redirect('user');
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
            return redirect('login');
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
    //Thommi - dsjfhdsjfhdsfjs
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

    // DONE!
    ////////

    function store(Request $request, $id)
    {
        // $Review = User::where('id', $id)->firstOrFail();
        $Review = new Review;
        $Review->title = $request->title;
        $Review->text = $request->text;
        $Review->user_id = $request->session()->get('LoggedUser');
        $Review->movie_id = $id;
        //$createReview->user_id = null;
        //$createReview->movie_id = null;
        //$createReview->text = null;
        $Review->save();
        ///return redirect('movie')->with('status', 'Succsess');
    }
}
