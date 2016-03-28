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

        $validator = $this->makeValidator($request);
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
        if ($request->path() == 'memberRegister')
            return $memberFactory->factoryMember($request->all());
        elseif($request->path() == 'storeRegister')
            return $memberFactory->factoryStore($request->all());
    }

    public function makeCredentialInstance(Request $request)
    {
        $credential =  new Credential();
        if ($request->path() == 'storeRegister')
        {
            $credential->setAttribute('role', 'store');
            $credential->setAttribute('status', 'wait');
        }
        else
        {
            $credential->setAttribute('role', 'member');
            $credential->setAttribute('status', 'active');
        }
        $credential->setAttribute('name', $request->get('name'));
        $credential->setAttribute('email', $request->get('email'));
        $credential->setAttribute('password', Hash::make($request->get('password')));
        return $credential;
    }

    public function makeValidator($request)
    {
        $rule = [
            'name' => 'required|unique:credentials',
            'email' => 'required|max:255|unique:credentials',
            'password' => 'required|confirmed|min:6',
        ];
        if($request->path() == 'memberRegister')
        {
            return Validator::make($request->all(), $rule);
        }
        elseif($request->path() == 'storeRegister')
        {

            return Validator::make($request->all(),
                array_merge($rule, ["storename" => "required",
                                  "address" => "required",
                                  "phonenumber" => "required",
                                  "representative" => "required"]));
        }
    }
}