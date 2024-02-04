<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class LibraryController extends BaseController
{
    public function index()
    {
        return view('library/index');
    }
    public function addBooks()
    {
        
        return view('library/content/addbook');
    }
}
