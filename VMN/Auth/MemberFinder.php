<?php

namespace VMN\Auth;



class MemberFinder
{

    public function getMemberProfile($account)
    {
        return \DB::table('members')
            ->where('accountName','=',$account)
            ->first();
            ;
    }

    public function getMemberArticle($account)
    {


    }

    public function getMemberMessage($account)
    {

    }
}