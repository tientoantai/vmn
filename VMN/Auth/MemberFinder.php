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

    public function getMemberMedicinalPlantsArticle($account)
    {
        return \DB::table('medicinal_plants')
            ->where('author','=',$account)
            ->get();
        ;

    }

    public function getMemberRemediesArticle($account)
    {
        return \DB::table('remedies')
            ->where('author','=',$account)
            ->get();
        ;

    }

    public function getMemberMessage($account)
    {

    }
}