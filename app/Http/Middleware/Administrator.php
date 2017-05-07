<?php

namespace App\Http\Middleware;

use Closure;

class Administrator
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
      if (Auth::guard($guard)->check() && Auth::user()->type !='admin')
        {
          return redirect('/home');
        }
        return $next($request);
    }
}
