<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\EnrollmentModel;


class EnrollmentController extends BaseController
{
    private $enrollment;
    public function __construct()
    {
        $this->enrollment = new EnrollmentModel();
  
    }
    public function addenroll()
    {
           $data['enrollment'] = $this->enrollment->findAll();

    return view('enrollment', $data);
    }
    public function enroll($enrollment)
    {
        echo $enrollment;
    }
    public function save()  {
        $idnum = $_POST['idnum'];
        $data = [
            'idnum' => $this->request->getVar('idnum'),
            'first_name' => $this->request->getVar('first_name'),
            'middle_name' => $this->request->getVar('middle_name'),
            'last_name' => $this->request->getVar('last_name'),
        
        ];

        if ($idnum != null) {
            $this->enrollment->set($data)->where('idnum', $idnum)->update();
        } else {
            $this->enrollment->save($data);
        }

        return view('enrollment');
    }

}
