<?php

namespace VMN\ArticleFindingService;


class ModDashBoardCondition implements ArticleFindingCondition
{

    public function getQuery()
    {
        $dashBoardInfo = [];
        $dashBoardInfo['sumOfPlants'] = \DB::table('medicinal_plants')->whereNull('deleted_at')->count();
        $dashBoardInfo['sumOfRemedies'] = \DB::table('remedies')->whereNull('deleted_at')->count();
        $dashBoardInfo['sumOfWaiting'] = \DB::table('medicinal_plants_history')->where('status', 'wait')->count()
        +\DB::table('remedies_history')->where('status', 'wait')->count();
        return $dashBoardInfo;
    }
}