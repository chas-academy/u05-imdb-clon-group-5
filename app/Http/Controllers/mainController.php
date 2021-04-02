<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

use App\Models\User;
use App\Models\Watchlist;

class mainController extends Controller
{
    // Creating user
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

    // Login
    function check(Request $request)
    {
        $credentials = $request->only('email', 'password');
        
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
                //If the passsword is incorrect
                return back()->with('fail', 'Incorrect password');
            }
        }
    }

    function logout()
    {
        if (session()->has('LoggedUser')) {
            session()->pull('LoggedUser');
            Auth::logout();
            return Redirect::to(URL::previous());
        }
    }
}
