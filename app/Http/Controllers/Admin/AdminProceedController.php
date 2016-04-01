<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use VMN\Auth\AdminProcessor;
use VMN\Contracts\Auth\Credential;
use App\Http\Middleware\AdminProceedMiddleWare;

class AdminProceedController extends Controller
{

    protected $adminProcessor;

    public function __construct(AdminProcessor $adminProcessor)
    {
        $this->adminProcessor = $adminProcessor;
        $this->middleware(AdminProceedMiddleWare::class);
    }

    public function approveRegister(Credential $credential)
    {
        $this->adminProcessor->proceedRegister($credential, 'active');
        return response()->json([
            'message' => 'Tài khoản đã được duyệt'
        ]);
    }

    public function denyRegister(Credential $credential)
    {
        $this->adminProcessor->proceedRegister($credential, 'denied');
        return response()->json([
            'message' => 'Từ chối duyệt tài khoản'
        ]);
    }

    public function changeStatus(Credential $credential)
    {
        $this->adminProcessor->changeStatus($credential);
        return response()->json([]);
    }

    public function changeRole(Credential $credential)
    {
        $this->adminProcessor->changeRole($credential, \Request::get('role'));
        return response()->json([]);
    }
}