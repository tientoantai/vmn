<?php

namespace VMN\ArticleFindingService;


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
        return \DB::table('medicinal_plants')
            ->where('id','=', $this->id())
            ->get()
            ;
    }
}