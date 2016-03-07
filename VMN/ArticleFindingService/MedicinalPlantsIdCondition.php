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
        $plant =\DB::table('medicinal_plants')
        ->where('id','=', $this->id())
        ->get()
        ;
        $comment = \DB::table('medicinal_plants_reviews')
        ->where('reviewed', '=', $this->id())
        ->get()
        ;

//        $related = [];
        return ['info' => $plant[0], 'comment' => $comment];
    }
}