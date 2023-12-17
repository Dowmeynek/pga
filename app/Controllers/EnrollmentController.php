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
        if(!session()->get('isLoggedIn')){
            return redirect()->to('/');
        }
        else{
            $session = session();
            session_start();
            $data = [
            'currentuser' => $_SESSION['username'],
            'enrollment' => $this->enrollment->findAll(),
            ];
        return view('enrollment', $data);
        }
    }
    public function enroll($enrollment)
    {
        echo $enrollment;
    }
    public function save()  {
        $idnum = $_POST['id'];
        if(!session()->get('isLoggedIn')){
            return redirect()->to('/');
        }
        else{
            $session = session();
            session_start();
            $data = [
            'currentuser' => $_SESSION['username'],
            'id' => $this->request->getVar('id'),
            'first_name' => $this->request->getVar('first_name'),
            'middle_name' => $this->request->getVar('middle_name'),
            'last_name' => $this->request->getVar('last_name'),
            'age' => $this->request->getVar('age'),
            'gender' => $this->request->getVar('gender'),
            'birthdate' => $this->request->getVar('birthdate'),
            'address' => $this->request->getVar('address'),
            'phone' => $this->request->getVar('phone'),
            'nationality' => $this->request->getVar('nationality'),
            'religion' => $this->request->getVar('religion'),
            'account_id' => $_SESSION['id'],
        ];

        if ($idnum != null) {
            $this->enrollment->set($data)->where('id', $id)->update();
        } else {
            $this->enrollment->save($data);
        }

        return view('enrollment', $data);
    }
    }

}
