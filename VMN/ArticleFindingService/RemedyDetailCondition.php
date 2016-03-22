<?php

namespace VMN\ArticleFindingService;


class RemedyDetailCondition implements ArticleFindingCondition
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
        $remedy =\DB::table('remedies')
            ->where('id','=', $this->id())
            ->get()
        ;
        $ingredient = \DB::table('remedy_ingredients')
            ->where('remedyId', '=', $this->id())
            ->get()
        ;

        $comment = [];

        return ['info' => $remedy[0], 'ingredient' => $ingredient, 'comment' => $comment];
    }
}