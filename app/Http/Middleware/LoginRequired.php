<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;

class LoginRequired
{
    public function handle(Request $request, \Closure $next)
    {
        if ( ! \Session::get('credential'))
        {
            return redirect('/');
        }
        return $next($request);
    }
}