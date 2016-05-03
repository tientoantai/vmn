<?php


namespace VMN\ArticleFindingService;
use \Illuminate\Support\Facades\DB;

class NewMedicinalPlantsCondition implements ArticleFindingCondition
{
    public function getQuery()
    {
        return DB::table('medicinal_plants')
            ->select(\DB::raw('*, ratingPoint/ratingTime as rating'))
            ->whereNull('deleted_at')
            ->orderBy('created_at','desc')
            ->limit(4)
            ->get();
        ;
    }
}