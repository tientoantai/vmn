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
    }


    public function showMemberProfile($account)
    {
        $role = $this->memberFinder->getMemberRole($account);
        if($role != 'store')
        {
            $member = $this->memberFinder->getMemberProfile($account);
            $view = 'profile';
        }
        else
        {
            $member = $this->memberFinder->getStoreInfo($account);
            $view = 'storeInfo';
        }
        $plantsPosted = $this->memberFinder->getMemberMedicinalPlantsArticle($account);
        $remediesPosted = $this->memberFinder->getMemberRemediesArticle($account);
        return view($view)
            ->with('info', $member)
            ->with('plantsPosted', $plantsPosted)
            ->with('remediesPosted', $remediesPosted)
            ->with('isMe', $account == Session::get('credential')['attributes']['name'])
            ;
    }
}