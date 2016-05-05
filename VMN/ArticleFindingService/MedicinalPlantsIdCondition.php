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
            ->first()
            ;
        if (!$plant) return null;
        $comment = \DB::table('medicinal_plants_reviews')
            ->join('credentials', 'medicinal_plants_reviews.reviewer', '=', 'credentials.name')
            ->select('credentials.avatar', 'medicinal_plants_reviews.reviewer',
                'medicinal_plants_reviews.reviewed', 'medicinal_plants_reviews.id',
                'medicinal_plants_reviews.comment', 'medicinal_plants_reviews.created_at')
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
        return ['info' => $plant, 'comment' => $comment, 'related' => $related];
    }
}