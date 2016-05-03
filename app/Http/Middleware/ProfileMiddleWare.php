<?php

namespace App\Http\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use VMN\Auth\Member;

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
        $member = $this->makeMember($request);
        app()->bind(get_class($member), function () use ($member) {
            return $member;
        });
        return $next($request);
    }

    public function makeMember($request)
    {
        $member = Member::where('accountName', $request->get('credential'))->first();
        $member->firstName = $request->get('firstName');
        $member->lastName = $request->get('lastName');
        $member->DoB = $request->get('DoB');
        $member->gender = $request->get('gender');
        return $member;
    }


}