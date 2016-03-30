<?php

namespace VMN\MemberFindingService;


class WaitingStoreCondition implements MemberFindingCondition
{

    public function getQuery()
    {
        \DB::table('herbal_medicinestore')
            ->where('status', '=', 'waiting')
            ->get();
        ;
    }
}