<?php

namespace VMN\MemberFindingService;


class AllUserCondition implements MemberFindingCondition
{

    public function getQuery()
    {
        return \DB::table('credentials')
            ->whereNotIn('status', ['waiting','denied'])
            ->where('role','<>', 'admin')
            ->get();
        ;
    }
}