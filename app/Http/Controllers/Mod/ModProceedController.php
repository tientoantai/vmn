<?php

namespace App\Http\Controllers\Mod;


use App\Http\Controllers\Controller;
use VMN\Article\MedicinalPlant;
use VMN\Article\ModProcessor;
use App\Http\Middleware\ModProceedMiddleWare;

class ModProceedController extends Controller
{

    protected $processor;

    public function __construct(ModProcessor $processor)
    {
        $this->processor = $processor;
        $this->middleware(ModProceedMiddleWare::class);
    }

    public function approveNewPlant(MedicinalPlant $plant)
    {
        $this->processor->approvePlant($plant, \Request::input('id'));
        return response()->json([
            'message' => 'Cây thuốc đã được đưa vào dữ liệu hệ thống'
        ]);
    }

    public function approveEditedPlant(MedicinalPlant $plant)
    {
        $this->processor->approvePlant($plant, \Request::input('id'));
        return response()->json([
            'message' => 'Chỉnh sửa đã được cập nhật'
        ]);
    }

    public function denyPlant()
    {
        $this->processor->denyPlant(\Request::input('id'));
        return response()->json([
            'message' => 'Yêu cầu đã bị từ chối'
        ]);
    }


    public function approveNewRemedy()
    {
        
    }

    public function rejectNewPlant()
    {
        
    }

    public function rejectNewRemedy()
    {
        
    }
}