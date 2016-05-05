<?php

namespace App\Http\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use VMN\Auth\Member;
use VMN\Contracts\Auth\Credential;

class ProfileMiddleWare
{
    public function handle(Request $request, \Closure $next)
    {
        if ($request->get('credential') != \Session::get('credential')['attributes']['name'])
        {
            return response()->json([
                'message' => 'Bạn không thể thực hiện yêu cầu này!'
            ]);
        }
        $object = $this->makeInstance($request);
        app()->bind(get_class($object), function () use ($object) {
            return $object;
        });
        return $next($request);
    }

    public function makeInstance($request)
    {
        if($request->path() == 'updateProfile')
        {
            $member = Member::where('accountName', $request->get('credential'))->first();
            $member->firstName = $request->get('firstName');
            $member->lastName = $request->get('lastName');
            $member->DoB = $request->get('DoB');
            $member->gender = $request->get('gender');
            return $member;
        }
        elseif($request->path() == 'changeAvatar')
        {
            $credential = Credential::where('name', $request->get('credential'))->first();
            $credential->avatar = $request->get('avatar');
            return $credential;
        }
    }


}