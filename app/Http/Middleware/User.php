<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
use Redirect;

class User
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
         //if log in
        //Auth::check()returns true if the user
        //is logged in and flase if not
        
        if (!Auth::check()) {
            return Redirect::route('app.login');
        
        }


        return $next($request);
    }
}