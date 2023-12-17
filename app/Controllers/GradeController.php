<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\GradeModel;

class GradeController extends BaseController
{
    public function index()
    {
        if(!session()->get('isLoggedIn')){
            return redirect()->to('/');
        }
        else{
            $session = session();
            session_start();
            $data = [
                'currentuser' => $_SESSION['username'],
            'chartData' => $this->getChartData(),
        ];

        return view('student/content/graph', $data);
    }
    }
    private function getChartData()
    {
        $chartModel = new GradeModel(); // Replace with your actual model name
        if(!session()->get('isLoggedIn')){
            return redirect()->to('/');
        }
        else{
            $session = session();
            session_start();
            $data = [
                'currentuser' => $_SESSION['username'],
                'graph' => $chartModel->findAll(),
            ];
        return $data;
        }
    }
}
