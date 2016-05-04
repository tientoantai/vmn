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
            ->whereNull('deleted_at')
            ->get()
            ;
        if (!$plant) return null;
        $comment = \DB::table('medicinal_plants_reviews')
            ->where('reviewed', '=', $this->id())
            ->whereNull('deleted_at')
            ->get()
            ;

        $related = \DB::table('remedy_ingredients')
        ->join('remedies', 'remedyId', '=', 'remedies.id')
        ->select('remedies.id', 'remedies.title', 'remedies.thumbnailUrl')
        ->where('medicinalPlantId', $this->id())
        ->whereNull('remedies.deleted_at')
        ->whereNull('remedy_ingredients.deleted_at')
        ->get();
        ;
        return ['info' => $plant[0], 'comment' => $comment, 'related' => $related];
    }
}