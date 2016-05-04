<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;

class AdminRequired
{
    public function handle(Request $request, \Closure $next)
    {
        if ( \Session::get('managementCredential')['attributes']['role'] != 'admin')
        {
            return redirect('managementLogin');
        }
        return $next($request);
    }
}