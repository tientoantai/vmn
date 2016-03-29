<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use App\Http\Middleware\HMSFindingCondition;
use VMN\Auth\HerbalMedicineStoreFinder;
use VMN\Auth\HSMFindingCondition;

class HerbalMedicineStoreController extends Controller
{

    protected $finder;

    public function __construct(HerbalMedicineStoreFinder $finder)
    {
        $this->finder = $finder;
        $this->middleware(HMSFindingCondition::class);
    }

    public function search(HSMFindingCondition $condition)
    {
        $hms = $this->finder->find($condition);
        return view('hebalMedicineStore')
            ->with('listHMS', $hms)
            ->with('condition', $condition)
            ;
    }
}