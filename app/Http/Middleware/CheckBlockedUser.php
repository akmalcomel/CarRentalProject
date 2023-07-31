<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckBlockedUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */

     public function handle($request, Closure $next)
    {
        // Check if the user is authenticated and blocked
        if (Auth::check() && Auth::user()->blocked === 1) {
            Auth::logout(); // Log out the blocked user
            return redirect()->route('blockedUser'); // Replace 'blockedUser' with the name of your route for the blocked user page
        }

        return $next($request);
    }


}
