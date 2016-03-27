<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use VMN\Auth\MemberFinder;
use App\Http\Middleware\ProfileMiddleWare;


class ProfileController extends Controller
{

    protected $memberFinder;

    protected $credentialName;

    public function __construct(MemberFinder $finder)
    {
        $this->memberFinder = $finder;
//        $this->credentialName = $account;
//        $this->middleware(ProfileMiddleWare::class);
    }


    public function showMemberProfile($account)
    {
        $member = $this->memberFinder->getMemberProfile($account);
        $plantsPosted = $this->memberFinder->getMemberMedicinalPlantsArticle($this->credentialName);
        $remediesPosted = $this->memberFinder->getMemberRemediesArticle($this->credentialName);
        return view('profile')
            ->with('info', $member)
            ->with('plantsPosted', $plantsPosted)
            ->with('remediesPosted', $remediesPosted)
            ->with('isMe', $account == Session::get('credential')['attributes']['name'])
            ;
    }
}