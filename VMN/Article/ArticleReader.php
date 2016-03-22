<?php

namespace VMN\Article;


class ArticleReader
{
    /**
     * @param MedicinalPlant $plant
     * @return array
     */
    public function medicinalPlantReader(MedicinalPlant $plant)
    {
        $plantInfo = [];
        if(isset( $plant->id))
        {
            $plantInfo['plantId'] = $plant->id();
        }
        foreach ($plant->getProperties() as $property)
        {
            $method = $this->getFunction($property);
            if (method_exists($plant, $method) && $property != 'ratingPoint')
            $plantInfo[$property] = call_user_func(array($plant, $this->getFunction($property)));
        }
        return $plantInfo;
    }

    public function getFunction($property)
    {
        return 'get'.ucfirst($property);
    }
}