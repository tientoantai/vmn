<?php

namespace VMN\ArticleEditingService;

use VMN\ArticleEditingService\Flow\MemberFlow;
use VMN\Contracts\Article\Article;
use VMN\Contracts\Auth\Authenticable;
use VMN\Contracts\EditorFlow\EditorFlow;

class ArticleEditingService
{

    /**
     * @param Article $article
     * @param Authenticable $editor
     * @return EditorFlow
     */
    public function edit(Article $article, Authenticable $editor)
    {

    }

    /**
     * @param Article $article
     * @param Authenticable $editor
     * @return EditorFlow
     */
    public function add(Article $article, Authenticable $editor)
    {

    }

    /**
     * Get all edit request made by member that related
     * the given editor
     *
     * @param Authenticable $forEditor
     * @return MemberFlow[]
     */
    public function editRequest(Authenticable $forEditor)
    {

    }

    /**
     * @param Authenticable $forEditor
     * @return MemberFlow
     */
    public function report(Authenticable $forEditor)
    {

    }

    /**
     * @param MemberFlow $memberFlow
     * @param Authenticable $authenticable
     */
    public function approve(MemberFlow $memberFlow, Authenticable $authenticable)
    {

    }
}