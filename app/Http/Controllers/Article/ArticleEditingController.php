<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use VMN\ArticleEditingService\ArticleEditingService;
use VMN\ArticleEditingService\Flow\MemberFlow;
use VMN\Contracts\Article\Article;
use VMN\Contracts\Auth\Authenticable;

/**
 * Class ArticleEditingController
 * @package App\Http\Controllers\Article
 */
class ArticleEditingController extends Controller
{
    /**
     * @var ArticleEditingService
     */
    protected $editingService;

    /**
     * ArticleEditingController constructor.
     * @param ArticleEditingService $editingService
     */
    public function __construct(ArticleEditingService $editingService)
    {
        $this->editingService = $editingService;
    }

    public function showAddPlant()
    {
        return view('addPlant');
    }
    /**
     * @param Article $article
     * @param Authenticable $authenticable
     * @return mixed
     */
    public function edit(Article $article, Authenticable $authenticable)
    {
        return $this->editingService->edit($article, $authenticable)->proceed();
    }

    /**
     * @param Authenticable $me
     * @return \VMN\ArticleEditingService\Flow\MemberFlow[]
     */
    public function getApproveEdition(Authenticable $me)
    {
        return $this->editingService->editRequest($me);
    }

    /**
     * @param MemberFlow $memberFlow
     * @param Authenticable $me
     */
    public function approveEdition(MemberFlow $memberFlow, Authenticable $me)
    {
        $this->editingService->approve($memberFlow, $me);
    }
}
