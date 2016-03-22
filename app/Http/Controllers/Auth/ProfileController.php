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
        $plantsPosted = $this->memberFinder->getMemberMedicinalPlantsArticle($this->credentialName);
        $remediesPosted = $this->memberFinder->getMemberRemediesArticle($this->credentialName);
        return view('profile')
            ->with('info', $member)
            ->with('plantsPosted', $plantsPosted)
            ->with('remediesPosted', $remediesPosted)
            ;
    }
}