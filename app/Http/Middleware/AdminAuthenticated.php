<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        /*
         * Determine is admin or not
         * */

        if(auth()->user()){
            if(auth()->user()->role === 'admin'){
                return $next($request);
            }
            /*
             * if user will return to the homePage
             * */
            return redirect ('/') ;
        }
         /* if not a user return to the login */
        return redirect('login');
    }
}
