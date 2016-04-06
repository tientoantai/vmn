<?php

namespace VMN\Article;

use VMN\Article\MedicinalPlant;
use VMN\Article\Remedy;

class ModProcessor
{

    public function approvePlant(MedicinalPlant $plant, $logId)
    {
        \DB::table('medicinal_plants_history')
            ->where('id', $logId)
            ->update(['status' => 'approved']);
        $plant->save();
    }

    public function approveNewRemedy(Remedy $remedy, $logId)
    {

    }

    public function approveEditedRemedy(Remedy $remedy, $logId)
    {

    }
}