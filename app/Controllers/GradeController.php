<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\GradeModel;

class GradeController extends BaseController
{
    public function index()
    {
        $data = [
            'chartData' => $this->getChartData(),
        ];

        return view('home/graph', $data);
    }
    private function getChartData()
    {
        $chartModel = new GradeModel(); // Replace with your actual model name
        $data = $chartModel->findAll();

        return $data;
    }
}
