<?php

namespace VMN\ArticleEditingService\Flow;

use VMN\Article\ArticleReader;
use VMN\Article\MedicinalPlant;
use VMN\Article\Remedy;

class ArticleEditingHistory {

    protected $articleReader;

    public function __construct(ArticleReader $reader)
    {
        $this->articleReader = $reader;
    }

    public function logMedicinalPlant(MedicinalPlant $article, $type)
    {
        $plantInfo = $this->articleReader->readMedicinalPlant($article);
        $plantInfo['type'] = $type;
        \DB::table('medicinal_plants_history')->insert(
            $plantInfo
        );
    }

    public function logRemedy(Remedy $article, $type)
    {
        $remedyInfo = $this->articleReader->readRemedy($article);
        $remedyInfo['type'] = $type;
        \DB::table('remedies_history')->insert(
            $remedyInfo
        );
    }
}