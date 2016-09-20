<?php

namespace App\Http\Middleware;

use Closure;

class LevelAdmin
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
	    if (Auth::user()->level != 1) {
		    return redirect()->guest('login');
	    }
        return $next($request);
    }
}
