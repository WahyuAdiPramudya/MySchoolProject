<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class GuruMiddleware
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
         if(Auth::check() && Auth::user()->role->id_role == 3 && Auth::user()->status == "enable" ){
            return $next($request);
        } else {
            return redirect('/guru');
        }
    }
}
