<?php

namespace VMN\ArticleEditingService\Flow;

use VMN\Article\ArticleReader;
use VMN\Article\MedicinalPlant;

class ArticleEditingHistory {

    protected $articleReader;
    public function __construct(ArticleReader $reader)
    {
        $this->articleReader = $reader;
    }

    public function logMedicinalPlant(MedicinalPlant $article, $type)
    {
        $plantInfo = $this->articleReader->medicinalPlantReader($article);
        $plantInfo['type'] = $type;
        \DB::table('medicinal_plants_history')->insert(
            $plantInfo
        );
    }
}