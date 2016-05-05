<?php

namespace VMN\Auth;



class ProfileFinder
{

    public function getMemberCredential($account)
    {
        return  \DB::table('credentials')
            ->select('role', 'avatar')
            ->where('name','=',$account)
            ->whereNotIn('status', ['wait','denied', 'inactive'])
            ->first()
        ;
    }

    public function getMemberProfile($account)
    {
        return \DB::table('members')
            ->where('accountName','=',$account)
            ->whereNull('deleted_at')
            ->first()
            ;
    }

    public function getStoreInfo($account)
    {
        return \DB::table('herbal_medicine_stores')
            ->where('accountName','=',$account)
            ->whereNull('deleted_at')
            ->first()
        ;
    }

    public function getMemberMedicinalPlantsArticle($account)
    {
        return \DB::table('medicinal_plants')
            ->select(\DB::raw('*, ratingPoint/ratingTime as rating'))
            ->where('author','=',$account)
            ->whereNull('deleted_at')
            ->get()
        ;

    }

    public function getMemberRemediesArticle($account)
    {
        return \DB::table('remedies')
            ->select(\DB::raw('*, ratingPoint/ratingTime as rating'))
            ->where('author','=',$account)
            ->whereNull('deleted_at')
            ->get()
        ;
    }

    public function getMemberMessage($account)
    {
        return \DB::table('messages')
            ->where('to', $account)
            ->get()
            ;
    }

    public function getPrescription($account)
    {
        return \DB::table('store_prescriptions')
            ->where('storeCredential', $account)
            ->whereNull('deleted_at')
            ->get()
            ;
    }
}