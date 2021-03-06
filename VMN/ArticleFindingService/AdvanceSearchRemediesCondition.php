<?php

namespace VMN\ArticleFindingService;


class   AdvanceSearchRemediesCondition extends RemediesKeywordCondition
{

    protected $utility;

    protected $ingredient;

    public function setUtility($utility)
    {
        $this->utility = trim($utility);
        return $this;
    }

    public function utility()
    {
        return $this->utility;

    }

    public function setIngredient($ingredient)
    {
        $this->ingredient = trim($ingredient);
        return $this;
    }

    public function getQuery()
    {
        $listRemedies = \DB::table('remedies')
            ->join('remedy_ingredients', 'remedies.id' , '=', 'remedy_ingredients.remedyId')
            ->select(\DB::raw('*', 'ratingPoint/ratingTime as rating'))
            ->where('remedies.utility', 'like', '%' . $this->utility . '%')
            ->whereNull('remedies.deleted_at')
            ->groupBy('remedies.id');
        ;

        return $listRemedies->paginate(config('app.perPageAdvance') ? config('app.perPageAdvance') : 6)
            ->appends('utility', $this->utility)
            ;
    }
}