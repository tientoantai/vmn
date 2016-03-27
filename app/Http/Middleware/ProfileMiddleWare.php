<?php

namespace App\Http\Middleware;
use Illuminate\Http\Request;

class ProfileMiddleWare
{
    public function handle(Request $request, \Closure $next)
    {
        $credentialName = $request->get('account');
        app()->bind($credentialName, function () use ($credentialName) {
            return $credentialName;
        });
        return $next($request);
    }


}