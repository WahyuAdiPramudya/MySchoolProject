<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check() && Auth::user()->role->id_role  == 1 && 
            Auth::user()->status == "enable") {

            return redirect()->route('SuperAdmin.dashboard');
            
        } elseif (Auth::guard($guard)->check() && Auth::user()->role->id_role  == 2 &&
            Auth::user()->status == "enable") {

            return redirect()->route('staff.dashboard');

        } elseif (Auth::guard($guard)->check() && Auth::user()->role->id_role  == 3 &&
            Auth::user()->status == "enable" ) {

            return redirect()->route('guru.dashboard');

        } elseif (Auth::guard($guard)->check() && Auth::user()->role->id_role == 4 &&
            Auth::user()->status == "enable" ) {
            
            return redirect()->route('orangtua.dashboard');
            
        } else  {
                return $next($request);
            }
        }
    }
