<?php

namespace VMN\Article;

use VMN\Article\MedicinalPlant;
use VMN\Article\Remedy;
use VMN\ArticleEditingService\Flow\RemedyIngredientService;
use VMN\MessagingService\Message;
use VMN\MessagingService\MessageManager;

class ModProcessor
{

    public function approvePlant(MedicinalPlant $plant, $logId)
    {
        \DB::table('medicinal_plants_history')
            ->where('id', $logId)
            ->update(['status' => 'approved']);
        $plant->save();
    }

    public function denyPlant($logId)
    {
        \DB::table('medicinal_plants_history')
            ->where('id', $logId)
            ->update(['status' => 'rejected']);
    }
    public function approveNewRemedy(Remedy $remedy, $logId)
    {
        \DB::table('remedies_history')
            ->where('id', $logId)
            ->update(['status' => 'approved']);

        $remedy->save();
        $ingredientService = new RemedyIngredientService();
        $ingredientService->insertIngredient(explode(',' ,$remedy->ingredients), $remedy->id());
    }

    public function approveEditedRemedy(Remedy $remedy, $logId)
    {
        \DB::table('remedies_history')
            ->where('id', $logId)
            ->update(['status' => 'approved']);
        $remedy->save();
    }

    public function rejectRemedy($logId)
    {
        \DB::table('remedies_history')
            ->where('id', $logId)
            ->update(['status' => 'rejected']);
    }

    public function remindAuthor(Message $message, $reportId, $table)
    {
        \DB::table($table)
            ->where('id', $reportId)
            ->update(['status' => 'remind']);
        $sender = new MessageManager();
        $sender->send($message);
    }
}