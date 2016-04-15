<?php

namespace VMN\PrescriptionService;


use VMN\Article\Remedy;
use VMN\Auth\HerbalMedicineStore;
use VMN\Contracts\Auth\Credential;


class PrescriptionService
{

    public function addPrescriptionByContribute(Remedy $remedy)
    {
        if ($this->isStore($remedy->getAuthor()))
        {
            \DB::table('remedy_ingredients')->insert([
                'storeCredential' => $remedy->getAuthor(),
                'remedyId'        => $remedy->id(),
                'remedyTitle'     => $remedy->getTitle(),
            ]);
        }
    }

    private function isStore($credentialName)
    {
        $credential = Credential::where('name', $credentialName);
        if ($credential->role == 'store')
            return true;
        else
            return false;
    }

    public function addPrescriptionByRegister(Remedy $remedy, HerbalMedicineStore $herbalMedicineStore)
    {
        \DB::table('store_prescriptions')->insert([
            'storeCredential' => \Session::get('credential')['attributes']['name'],
            'storeName'       => $herbalMedicineStore->storename,
            'storeAvatar'     => $herbalMedicineStore->avatar,
            'remedyId'        => $remedy->id(),
            'remedyTitle'     => $remedy->getTitle()
        ]);
    }

}