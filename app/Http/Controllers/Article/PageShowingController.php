<?php

namespace app\Http\Controllers\Article;


use App\Http\Controllers\Controller;
use VMN\ArticleFindingService\ArticleFinder;
use VMN\ArticleFindingService\NewMedicinalPlantsCondition;
use VMN\ArticleFindingService\ProminentMedicalPlantsCondition;

class PageShowingController extends Controller
{

    protected $finder;

    public function __construct(ArticleFinder $finder)
    {
        $this->finder = $finder;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function home()
    {
        return view('home',[
                'prominentMedicalPlants' => $this->finder->find(new ProminentMedicalPlantsCondition()),
                'newMedicinalPlants' => $this->finder->find(new NewMedicinalPlantsCondition())
            ])
            ;
    }

    public function showAddPlant()
    {
        return view('addPlant');
    }
}