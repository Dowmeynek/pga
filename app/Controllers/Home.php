<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('index');
    }
    public function logreg()
    {
        return view('logreg/index');
    }
    public function reg()
    {
        return view('logreg/reg/register');
    }
}
