<?php

namespace VMN\Article;

use VMN\ArticleEditingService\Flow\RemedyIngredientService;
use VMN\MessagingService\Message;
use VMN\MessagingService\MessageManager;
use VMN\PrescriptionService\PrescriptionService;

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
        $prescriptionService = new PrescriptionService();
        $prescriptionService->addPrescriptionByContribute($remedy);

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

    public function deletePlant(MedicinalPlant $medicinalPlant)
    {
        $medicinalPlant->delete();
        \DB::table('remedy_ingredients')
            ->where('medicinalPlantId', $medicinalPlant->id())
            ->update(['medicinalPlantId' => 0])
            ;
    }

    public function deleteRemedy(Remedy $remedy)
    {
        $remedy->delete();
        \DB::table('remedy_ingredients')
            ->where('remedyId', $remedy->id())
            ->update(['deleted_at' => date('y-m-d h:i:s')]);
        \DB::table('store_prescriptions')
            ->where('remedyId', $remedy->id())
            ->update(['deleted_at' => date('y-m-d h:i:s')]);
    }

    public function ignoreReportRemedy($id)
    {
        \DB::table('remedies_reports')->where('id',$id)->update(['status'=> 'ignored']);
    }

    public function ignoreReportPlant($id)
    {
        \DB::table('medicinal_plants_reports')->where('id',$id)->update(['status'=> 'ignored']);
    }
}