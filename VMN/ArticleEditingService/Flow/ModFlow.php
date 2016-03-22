<?php

namespace VMN\ArticleEditingService\Flow;

use VMN\Contracts\Article\Article;
use VMN\Contracts\EditorFlow\EditorFlow;



class ModFlow implements EditorFlow
{
    protected $historyService;

    /**
     * MemberFlow constructor.
     * @param ArticleEditingHistory $historyService
     */
    public function __construct(ArticleEditingHistory $historyService)
    {
        $this->historyService = $historyService;
    }

    public function proceed(Article $article, $type)
    {
        $this->historyService->logMedicinalPlant($article, $type);
        $article->save();
    }
}