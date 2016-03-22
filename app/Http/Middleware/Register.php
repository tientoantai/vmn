<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use VMN\Auth\MemberFactory;
use VMN\Contracts\Auth\Credential;
use Validator;

class Register
{
    public function handle(Request $request, \Closure $next)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:credentials',
            'email' => 'required|email|max:255|unique:credentials',
            'password' => 'required|confirmed|min:6',
        ]);
        if ($validator->fails()){
            return response()->json([
                'status' => 'error',
                'code'   => 'DATA_IS_INVALID',
                'message' => $validator->errors()->all()
            ]);
        }
        
        $credential = $this->makeCredentialInstance($request);

        app()->bind(get_class($credential), function () use ($credential) {
            return $credential;
        });

        $member = $this->makeMemberInstance($request);
        app()->bind(get_class($member), function () use ($member) {
            return $member;
        });

        return $next($request);
    }

    public function makeMemberInstance(Request $request)
    {
        $memberFactory = new MemberFactory();
        return $memberFactory->factory($request->all());
    }

    public function makeCredentialInstance(Request $request)
    {
        $credential =  new Credential();
        $credential->setAttribute('role', 'member');
        $credential->setAttribute('name', $request->get('name'));
        $credential->setAttribute('email', $request->get('email'));
        $credential->setAttribute('password', Hash::make($request->get('password')));
        return $credential;
    }
}