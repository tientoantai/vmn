<?php

namespace VMN\ArticleFindingService;


class ListPlantNameCondition implements ArticleFindingCondition
{

    public function getQuery()
    {
        $listPlantName = \DB::table('medicinal_plants')->select('commonName')->get();
        $listPlantName = array_map(function($object){
            return (array) $object;
        }, $listPlantName);
        $listPlantName = array_column($listPlantName, 'commonName');
        return $listPlantName;
    }
}