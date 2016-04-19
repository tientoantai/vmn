<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use VMN\Auth\ProfileFinder;
use VMN\Contracts\Auth\Credential;


class ProfileController extends Controller
{

    protected $memberFinder;

    protected $credentialName;

    public function __construct(ProfileFinder $finder)
    {
        $this->memberFinder = $finder;
    }


    public function showMemberProfile($account)
    {
        $credential = $this->memberFinder->getMemberCredential($account);
        if ( ! $credential){
            return 'Người dùng không tồn tại';
        }
        elseif($credential->role != 'store')
        {
            $member = $this->memberFinder->getMemberProfile($account);
            $view = 'profile';
        }
        else
        {
            $member = $this->memberFinder->getStoreInfo($account);
            $view = 'storeInfo';
        }
        $member->avatar = $credential->avatar ? $credential->avatar : 'assets/img/team/01.jpg';
        $plantsPosted = $this->memberFinder->getMemberMedicinalPlantsArticle($account);
        $remediesPosted = $this->memberFinder->getMemberRemediesArticle($account);
        $message = $this->memberFinder->getMemberMessage($account);
        return view($view)
            ->with('info', $member)
            ->with('plantsPosted', $plantsPosted)
            ->with('remediesPosted', $remediesPosted)
            ->with('message', $message)
            ->with('isMe', $account == Session::get('credential')['attributes']['name'])
            ;
    }
}