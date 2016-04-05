<?php

namespace App\Http\Controllers\Mod;


use App\Http\Controllers\Controller;
use VMN\ArticleFindingService\ArticleFinder;
use VMN\ArticleFindingService\PlantManagementCondition;


class ModArticleDataFindingController extends Controller
{
    protected $modFinder;

    /**
     *ModArticleDataController
     * ModArticleDataController constructor.
     * @param $finder
     */
    public function __construct(ArticleFinder $finder)
    {
        $this->modFinder = $finder;
    }

    public function modHome()
    {
        return view('mod/dashboard');
    }

    public function getWaitingPlants(PlantManagementCondition $condition)
    {
        $list = $this->modFinder->find($condition);

        return view('mod/waitingPlants')
            ->with('new', $list['new'])
            ->with('edit', $list['edit'])
            ->with('reported', $list['reported'])
            ;
    }

    public function getWaitingRemedies($condition)
    {
        $list = $this->modFinder->find($condition);
        return view('mod/waitingRemedies');
    }
}