<?php

namespace VMN\ArticleFindingService;

use Illuminate\Support\Facades\DB;

class RemediesKeywordCondition implements ArticleFindingCondition
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
        $listRemedy = \DB::table('remedies')
            ->select(\DB::raw('*, ratingPoint/ratingTime as rating'))
            ->whereNull('deleted_at');
        $listRemedy->where(function ($query) {
            foreach (preg_split('/\s+/', $this->keyword()) as $keyword) {
                $query->orwhere('title','like','%'.$keyword.'%');
            }
        });
        return $listRemedy->paginate(config('app.perPage') ? config('app.perPage') : 4)
            ->appends('keyword', $this->keyword);
    }
}