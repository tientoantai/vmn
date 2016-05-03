<?php

namespace VMN\ArticleFindingService;

class   MedicinalPlantNameCondition implements ArticleFindingCondition, PaginatableCondition
{
    protected $keyword;

    protected $page;

    protected $perPage;

    public function setKeyword($keyword)
    {
        $this->keyword = $keyword;

        return $this;
    }

    public function keyword()
    {
        return $this->keyword;
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
        $listPlant =  \DB::table('medicinal_plants');
        foreach (preg_split('/\s+/', $this->keyword) as $keyword) {
            $listPlant->orwhere('commonName','like','%'.$keyword.'%')
                ->orWhere('otherName','like','%'.$keyword.'%');
        }
        return $listPlant
            ->paginate(6)
            ->appends('keyword', $this->keyword)
            ;
    }

}