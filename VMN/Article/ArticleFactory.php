<?php

namespace VMN\Article;


class ArticleFactory
{

    /**
     * @param $plantInfo
     * @return \VMN\Article\MedicinalPlant
     */
    public function makeNewPlant($plantInfo)
    {
        $plant = new MedicinalPlant();
        $plant->setCommonName($plantInfo['commonName']);
        $plant->setOtherName($plantInfo['otherName']);
        $plant->setScienceName($plantInfo['scienceName']);
        $plant->setCharacteristic($plantInfo['characteristic']);
        $plant->setLocation($plantInfo['location']);
        $plant->setUtility($plantInfo['utility']);
        $plant->setImgUrl($plantInfo['images']);
        $plant->setThumbnailUrl($plantInfo['thumbnail']);
        $plant->setAuthor(\Session::get('credential')['attributes']['name']);
        return $plant;
    }

    public function makePlantChange($newInfo)
    {
        $plant = new MedicinalPlant();
        $plant = $plant->find($newInfo['plantId']);
        //update info (without image)
        $plant->otherName       = $newInfo['otherName'];
        $plant->characteristic  = $newInfo['characteristic'];
        $plant->location        = $newInfo['location'];
        $plant->utility         = $newInfo['utility'];
        return $plant;

    }

    public function makeRemedy($remedyInfo)
    {

    }
}