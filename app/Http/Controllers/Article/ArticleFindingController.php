<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use App\Http\Middleware\FindingCondition;
use VMN\ArticleFindingService\AllMedicinalPlantsCondition;
use VMN\ArticleFindingService\ArticleFinder;
use VMN\ArticleFindingService\MedicinalPlantNameCondition;
use VMN\ArticleFindingService\MedicinalPlantsIdCondition;

/**
 * Class ArticleFindingController
 * @package App\Http\Controllers\Article
 */
class ArticleFindingController extends Controller
{
    /**
     * @var ArticleFinder
     */
    protected $finder;

    /**
     * ArticleFindingController constructor.
     * @param ArticleFinder $finder
     */
    public function __construct(ArticleFinder $finder)
    {
        $this->finder = $finder;
        // todo Register finding condition middleware here
        $this->middleware(FindingCondition::class);
    }

    /**
     * @param MedicinalPlantNameCondition $condition
     * @return \VMN\Contracts\Article\Article[]
     */
    public function find(MedicinalPlantNameCondition $condition)
    {

        return view('medicinalPlants')
            ->with('condition', $condition)
            ->with('listPlant', $this->finder->find($condition))
        ;
    }

    public function medicinalPlantsDetail(MedicinalPlantsIdCondition $condition)
    {
        $plant = $this->finder->find($condition);
        return view('plantsDetail')
            ->with('plant',$plant)
            ;
    }

    public function showAdvanceSearchPlant(MedicinalPlantNameCondition $condition)
    {
        $plants = $this->finder->find($condition);
        return view('advancedSearch')
            ->with('condition', $condition)
            ->with('plants', $plants)
            ;
    }

    /**
     * @return \Illuminate\View\View
     */
    public function showSearchView()
    {
        return view('article.search');
    }
}