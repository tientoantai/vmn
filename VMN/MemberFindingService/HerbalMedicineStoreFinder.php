<?php

namespace VMN\MemberFindingService;


class HerbalMedicineStoreFinder
{
    /**
     * @param HSMFindingCondition $condition
     * @return HerbalMedicineStore[]
     */
    public function find(HSMFindingCondition $condition)
    {
        return $condition->getQuery();
    }
}