<?php

namespace VMN\ArticleFindingService;


class PlantManagementCondition implements ArticleFindingCondition
{

    public function getQuery()
    {
        $plantManagement = [];

        $plantManagement['new'] = \DB::table('medicinal_plants_history')
            ->where('status','wait')
            ->where('type', 'add')
            ->get()
        ;

        $plantManagement['edit'] = \DB::table('medicinal_plants_history')
            ->where('status','wait')
            ->where('type','edit')
            ->groupBy('plantID')
            ->get()
            ;

        $plantManagement['reported'] = \DB::table('medicinal_plants')
            ->join('medicinal_plants_reports', 'reported', '=', 'medicinal_plants.id')
            ->where('status','')
            ->get()
        ;
        return $plantManagement;
    }
}