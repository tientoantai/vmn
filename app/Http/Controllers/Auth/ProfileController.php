<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use VMN\Auth\MemberFinder;


class ProfileController extends Controller
{

    protected $memberFinder;

    protected $credentialName;

    public function __construct(MemberFinder $finder)
    {
        $this->memberFinder = $finder;
        $this->credentialName = Session::get('credential')['attributes']['name'];
    }


    public function showMemberProfile()
    {

        $member = $this->memberFinder->getMemberProfile($this->credentialName);
//        dd($member);
        return view('profile')
            ->with('info', $member);
            ;
    }
}