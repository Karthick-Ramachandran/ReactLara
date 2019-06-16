<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Session;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::check()) {
            if(Auth::user()->admin) {
                return $next($request);

            } else {
                Session::flash('unauth', 'You are not the admin to do this');
                return redirect()->back();
            }
        } else {
            Session::flash('unauth', 'Please Login');

            return redirect('/login');
        }
    }
}
