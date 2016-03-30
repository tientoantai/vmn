<?php

namespace App\Http\Controllers;



class AdminController extends Controller
{

    protected $adminFinder;

    public function __construct($finder)
    {
        $this->adminFinder = $finder;
    }
    
    public function adminHome()
    {
        return view('admin/dashboard');
    }

    public function adminGetApprove()
    {
        
        return view('admin/waitingStore');
    }
}