<?php

namespace App\Http\Middleware;
use Illuminate\Http\Request;

class ModLoginRequired
{
    public function handle(Request $request, \Closure $next)
    {
        if ( \Session::get('managementCredential')['attributes']['role'] != 'mod')
        {
            return redirect('managementLogin');
        }
        return $next($request);
    }
}