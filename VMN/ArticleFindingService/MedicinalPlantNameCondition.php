<?php

namespace VMN\ArticleFindingService;

class   MedicinalPlantNameCondition implements ArticleFindingCondition, PaginatableCondition
{
    protected $keyword;

    protected $page;

    protected $perPage;

    public function setKeyword($keyword)
    {
        $this->keyword = trim($keyword);

        return $this;
    }

    public function keyword()
    {
        return trim($this->keyword);
    }

    public function setPage($page)
    {
        $this->page = $page;

        return $this;
    }

    public function setPerPage($perPage)
    {
        $this->perPage = $perPage;
    }
    public function page()
    {
        return $this->page;
    }

    public function getQuery()
    {
        $listPlant =  \DB::table('medicinal_plants')
            ->select(\DB::raw('*, ratingPoint/ratingTime as rating'))
            ->whereNull('deleted_at');

        $listPlant->where(function ($query) {
            foreach (preg_split('/\s+/', $this->keyword()) as $keyword) {
                $query->orwhere('commonName','like','%'.$keyword.'%')
                    ->orWhere('otherName','like','%'.$keyword.'%');
            }
        });
        return $listPlant
            ->paginate(6)
            ->appends('keyword', $this->keyword)
            ;
    }

}