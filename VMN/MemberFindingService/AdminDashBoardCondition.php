<?php

namespace VMN\MemberFindingService;


class AdminDashBoardCondition implements MemberFindingCondition
{
    public function getQuery()
    {
        $dashBoardInfo = [];
        $dashBoardInfo['user'] = \DB::table('credentials')->count();
        $dashBoardInfo['store'] = \DB::table('credentials')
            ->where('role','store')->whereNotIn('status',['wait'])->count();
        $dashBoardInfo['waiting'] = \DB::table('credentials')->where('status', 'wait')->count()
            +\DB::table('remedies_history')->where('status', 'wait')->count();
        return $dashBoardInfo;
    }
}