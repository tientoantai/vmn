<?php


namespace VMN\ArticleFindingService;

use \Illuminate\Support\Facades\DB;
//use DB;


class ProminentMedicalPlantsCondition implements ArticleFindingCondition
{
    public function getQuery()
    {
        return DB::table('medicinal_plants')
                ->whereNotNull('deleted_at')
                ->orderBy('ratingPoint','desc')
                ->limit(8)
                ->get();
            ;
    }

}