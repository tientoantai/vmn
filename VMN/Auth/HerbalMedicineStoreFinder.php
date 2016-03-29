<?php

namespace VMN\Auth;


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