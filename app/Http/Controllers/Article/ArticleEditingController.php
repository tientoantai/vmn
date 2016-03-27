<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use VMN\Article\EditorFlowManager;
use VMN\ArticleEditingService\ArticleEditingService;
use VMN\ArticleEditingService\Flow\MemberFlow;
use VMN\Contracts\Article\Article;
use VMN\Article\MedicinalPlant;
use VMN\Article\Remedy;
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

    protected $type;

    /**
     * ArticleEditingController constructor.
     * @param ArticleEditingService $editingService
     */
    public function __construct(ArticleEditingService $editingService)
    {
        $this->editingService = $editingService;
        $this->type  = \Session::get('credential')['attributes']['role'];
        $this->middleware(EditingData::class);
    }


    public function addPlants(MedicinalPlant $plant, EditorFlowManager $editorFlowManager)
    {
        $this->editingService->add($editorFlowManager, \Session::get('credential')['attributes']['role'])
            ->proceed($plant, 'add');
        return response()
            ->json(['message'=>'Thông tin đã được gửi thành công',
                'flow' => $this->type,
                'status' => 'OK'
            ]);
    }

    public function editPlants(MedicinalPlant $plant, EditorFlowManager $editorFlowManager)
    {
        $this->editingService->edit($editorFlowManager, \Session::get('credential')['attributes']['role'])
            ->proceed($plant, 'edit');
        return response()
            ->json(['message'=>'Thông tin đã được gửi thành công',
                'flow' => $this->type,
                'status' => 'OK'
            ]);
    }

    public function addRemedy(Remedy $remedy, EditorFlowManager $editorFlowManager)
    {

        $this->editingService->add($editorFlowManager, 'mod')
            ->proceed($remedy, 'add');
        return response()
            ->json(['message'=>'Thông tin đã được gửi thành công',
                    'flow' => $this->type,
                    'status' => 'OK'
            ]);
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
