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
            ->whereNull('deleted_at')
            ->get()
        ;
        if ( ! $remedy) return null;
        $ingredient = \DB::table('remedy_ingredients')
            ->where('remedyId', '=', $this->id())
            ->whereNull('deleted_at')
            ->get()
        ;

        $comment = \DB::table('remedies_reviews')
            ->join('credentials', 'remedies_reviews.reviewer', '=', 'credentials.name')
            ->select('credentials.avatar', 'remedies_reviews.reviewer',
                'remedies_reviews.reviewed', 'remedies_reviews.id',
                'remedies_reviews.comment', 'remedies_reviews.created_at')
            ->where('reviewed', '=', $this->id())
            ->whereNull('deleted_at')
            ->get()
        ;

        $related = \DB::table('store_prescriptions')
            ->where('remedyId', '=', $this->id())
            ->whereNull('deleted_at')
            ->get()
        ;

        return ['info'          => $remedy[0],
                'ingredient'    => $ingredient,
                'comment'       => $comment,
                'related'       => $related
        ];
    }
}