<?php

namespace VMN\MemberFindingService;


class AllUserCondition implements MemberFindingCondition
{

    public function getQuery()
    {
        return \DB::table('credentials')
//            ->join('herbal_medicine_stores', 'credentials.name' , '=', 'herbal_medicine_stores.accountName')
            ->whereNotIn('status', ['waiting','denied'])
            ->get();
        ;
    }
}