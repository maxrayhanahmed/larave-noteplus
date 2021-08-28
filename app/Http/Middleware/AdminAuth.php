<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminAuth
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
        if(session('user_type') === 'admin'){
            return $next($request);
        }else{
          return  abort(403, 'Unauthorized.');
        }
            //return $next($request);
    }
}
