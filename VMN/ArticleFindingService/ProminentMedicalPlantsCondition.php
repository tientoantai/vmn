<?php


namespace VMN\ArticleFindingService;

use \Illuminate\Support\Facades\DB;
//use DB;


class ProminentMedicalPlantsCondition implements ArticleFindingCondition
{
    public function getQuery()
    {
        return DB::table('medicinal_plants')
                ->select(\DB::raw('*, ratingPoint/ratingTime as rating'))
                ->whereNull('deleted_at')
                ->orderBy(\DB::raw('ratingPoint/ratingTime'),'desc')
                ->limit(8)
                ->get();
            ;
    }

}