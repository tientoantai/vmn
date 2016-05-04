<?php

namespace VMN\ArticleEditingService\Flow;

use VMN\Article\MedicinalPlant;
use VMN\Article\Remedy;
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
        if ($article instanceof MedicinalPlant)
        {
            if($type == 'edit')
            {
                \DB::table('medicinal_plants_history')->where('type', 'edit')->where('plantId', $article->id())
                    ->update(['status'=>'rejected']);
            }
            $this->historyService->logMedicinalPlant($article, $type);
        }
        elseif ($article instanceof Remedy)
        {
            if($type == 'edit')
            {
                \DB::table('remedies_history')->where('type', 'edit')->where('remedyId', $article->id())
                ->update(['status'=>'rejected']);
            }
            $this->historyService->logRemedy($article, $type);
        }
    }

}