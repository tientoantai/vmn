<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use VMN\ArticleFindingService\MedicinalPlantsIdCondition;
use VMN\ArticleFindingService\ArticleFindingCondition;
use VMN\ArticleFindingService\MedicinalPlantNameCondition;
use VMN\ArticleFindingService\RemediesKeywordCondition;

class FindingCondition
{
    public function handle(Request $request, \Closure $next)
    {
        $condition = $this->makeSearchCondition($request);
        app()->bind(get_class($condition), function () use ($condition) {
            return $condition;
        });

        return $next($request);
    }

    /**
     * @param Request $request
     * @return ArticleFindingCondition
     */
    protected function makeSearchCondition (Request $request)
    {
        switch ($request->path()):
            case 'medicinalPlants':
                if ($request->has('keyword'))
                {
                    return with(new MedicinalPlantNameCondition())->setKeyword($request->get('keyword'));
                }
                elseif($request->has('id'))
                {
                    return with(new MedicinalPlantsIdCondition())->setId($request->get('id'));
                }
                else
                {
                    return with(new MedicinalPlantNameCondition())->setKeyword($request->get('keyword'));
                }
                break;
            case 'remedies':
//                if ($request->has('keyword'))
//                {
                    return with(new RemediesKeywordCondition())->setKeyword($request->get('keyword'));
//                }
//                else
//                {
//
//                }
                break;
        endswitch;
    }
}