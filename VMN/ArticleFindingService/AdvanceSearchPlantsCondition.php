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
        $this->scienceName = trim($scienceName);
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
        $this->utility = trim($utility);
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
        $this->characteristic = trim($characteristic);
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
            ->whereNull('deleted_at');
        $listPlant->where(function ($query) {
            foreach (preg_split('/\s+/', $this->scienceName()) as $name) {
                $query->orwhere('scienceName','like','%'.$name.'%');
            }
        });
        $listPlant->where(function ($query) {
            foreach (preg_split('/\s+/', $this->characteristic()) as $characteristic) {
                $query->orWhere('characteristic', 'like', '%'.$characteristic.'%');
            }
        });

        $listPlant->where(function ($query) {
            foreach (preg_split('/\s+/', $this->utility()) as $utility) {
                $query->orWhere('utility', 'like', '%'.$utility.'%');
            }
        });
        return $listPlant->paginate(config('app.perPageAdvance') ? config('app.perPageAdvance') : 4)
            ->appends('scienceName', $this->scienceName)
            ->appends('characteristic', $this->characteristic)
            ->appends('utility', $this->utility)
        ;
    }
}