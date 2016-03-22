<?php

namespace VMN\ArticleEditingService\Flow;

use VMN\Contracts\Article\Article;
use VMN\Contracts\EditorFlow\EditorFlow;
use VMN\Article\ArticleReader;
use Illuminate\Support\Facades\DB;

class MemberFlow implements EditorFlow
{

    protected $historyService;

    public function __construct(ArticleEditingHistory $historyService)
    {
        $this->historyService = $historyService;
    }

    public function proceed(Article $article, $type)
    {
        $this->historyService->logMedicinalPlant($article, $type);
    }

}