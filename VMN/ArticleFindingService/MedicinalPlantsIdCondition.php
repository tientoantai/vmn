<?php
/**
 * Created by PhpStorm.
 * User: tientoantai
 * Date: 19/02/2016
 * Time: 14:17
 */

namespace VMN\ArticleFindingService;
use \Illuminate\Support\Facades\DB;

class MedicinalPlantsIdCondition implements ArticleFindingCondition
{
    protected $id;

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function id()
    {
        return $this->id;
    }

    public function getQuery()
    {
        return DB::table('medicinal_plants')
            ->where('id','=', $this->id())
            ->get()
            ;
    }
}