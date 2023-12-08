<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AdminController extends BaseController
{
    public function index()
    {
        return view('admin');
    }
    
    public function cal()
    {
        return view('admin/content/cal');
    }
}
