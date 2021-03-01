<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class authCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        //If user is logged in, then force to /user
        if(!session()->has('LoggedUser') && ($request->path() !='login' && $request->path() !='register' )) {
            return redirect('login')->with('fail', 'You must be logged in');
        }

        //If the user has no account, then redirect them to register´s site.
        if(session()->has('LoggedUser') && ($request->path() == 'login' || $request->path() == 'register')) {
            return back();
        }

        //If the user press back in the browser, they are still logged out.
        return $next($request)->header('Cache-Control','no-cache, no-store, max-age=0, must-revalidate')
                              ->header('Pragma','no-cache')
                              ->header('Expires','Sat 01 Jan 1990 00:00:00 GMT');
    }
}
