<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

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
		// neu chua dang nhap thi return ve login
		if(Auth::guest())
		{
			return redirect()->guest('login');
		}
		//neu da dang nhap ma khac level admin thi tra ve trang admin home
	    if (Auth::user()->level != 1) {
			return redirect()->guest('admin/home');
	    }
        return $next($request);
    }
}
