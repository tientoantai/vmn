<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use VMN\Article\EditorFlowManager;
use VMN\ArticleEditingService\ArticleEditingService;
use VMN\ArticleEditingService\Flow\MemberFlow;
use VMN\Contracts\Article\Article;
use VMN\Article\MedicinalPlant;
use VMN\Contracts\Auth\Authenticable;
use App\Http\Middleware\EditingData;

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

        $this->middleware(EditingData::class);
    }


    public function addPlants(MedicinalPlant $plant, EditorFlowManager $editorFlowManager)
    {
        $this->editingService->add($editorFlowManager, \Session::get('credential')['attributes']['role'])
            ->proceed($plant, 'add');
        return response()->json(['msg'=>'Thông tin đã được gửi thành công']);
    }

    public function editPlants(MedicinalPlant $plant, EditorFlowManager $editorFlowManager)
    {
        $this->editingService->edit($editorFlowManager, \Session::get('credential')['attributes']['role'])
            ->proceed($plant, 'edit');
        return response()->json(['msg'=>'Thông tin đã được gửi thành công']);
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
