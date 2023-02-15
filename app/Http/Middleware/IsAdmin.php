<?php

namespace App\Http\middleware;

use Closure;
use Illuminate\Http\Request;

class IsAdmin
{
    /**
     * Handle an incoming request.
     * 
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed 
     */
    public function handle(Request $request, Closure $netx)
    {
        if(!auth()->check()|| auth ()->user()->is_admin){
            abort(403);
        }
        return $next($request);
    }
}