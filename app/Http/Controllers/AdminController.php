<?php

namespace App\Http\Controllers;


class AdminController extends Controller
{
    public function adminHome()
    {
        return view('admin/dashboard');
    }
}