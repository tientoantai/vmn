<?php

namespace VMN\ArticleFindingService;



class AdvanceSearchPlantsCondition extends MedicinalPlantNameCondition
{

    protected $characteristic;

    protected $scienceName;

    protected $utility;

    protected $ratingPoint;

    /**
     * @param string $scienceName
     * @return $this
     */
    public function setScienceName($scienceName)
    {
        $this->scienceName = $scienceName;
        return $this;
    }

    /**
     * @return string
     */
    public function scienceName()
    {
        return $this->scienceName;
    }

    /**
     * @param string $utility
     * @return $this
     */
    public function setUtility($utility)
    {
        $this->utility = $utility;
        return $this;
    }

    public function utility()
    {
        return $this->utility;
    }

    /**
     * @param $characteristic
     * @return $this
     */
    public function setCharacteristic($characteristic)
    {
        $this->characteristic = $characteristic;
        return $this;
    }

    public function characteristic()
    {
        return $this->characteristic;
    }
    public function getQuery()
    {
        $listPlant = \DB::table('medicinal_plants')
            ->select(\DB::raw('*, ratingPoint/ratingTime as rating'))
            ->where('scienceName','like','%'.$this->scienceName.'%')
            ->where('characteristic', 'like', '%'.$this->characteristic.'%')
            ->where('utility', 'like', '%'.$this->utility.'%')
            ->whereNull('deleted_at')
        ;
        return $listPlant->paginate(4)
            ->appends('scienceName', $this->scienceName)
            ->appends('characteristic', $this->characteristic)
            ->appends('utility', $this->utility)
        ;
    }
}