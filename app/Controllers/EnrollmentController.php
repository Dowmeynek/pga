<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LearnerModel;
use App\Models\FamilyModel;
use App\Models\SchoolAttendedModel;


class EnrollmentController extends BaseController
{
    private $enrollment;
    public function __construct()
    {
        $this->learner = new LearnerModel();
        $this->family = new FamilyModel();
        
        $this->school = new SchoolAttendedModel();
  
    }
    public function addenroll()
    {
        if(!session()->get('isLoggedIn')){
            return redirect()->to('login');
        }
        else{
            $session = session();
            session_start();
            $data = [
            'currentuser' => $_SESSION['username'],
            //'learner' => $this->learner->findAll(),
            ];
        return view('enrollment/index', $data);
        }
    }
    public function enroll($learner)
    {
        echo $learner;
    }
    public function save()  {
        $idnum = $_POST['id'];
        if(!session()->get('isLoggedIn')){
            return redirect()->to('login');
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
            'nickname' => $this->request->getVar('nickname'),
            'age' => $this->request->getVar('age'),
            'gender' => $this->request->getVar('gender'),
            'birthdate' => $this->request->getVar('birthdate'),
            'birthplace' => $this->request->getVar('birthplace'),
            'address' => $this->request->getVar('address'),
            'tel_num' => $this->request->getVar('tel_num'),
            'mobile_num' => $this->request->getVar('mobile_num'),
            'postal_code' => $this->request->getVar('postal_code'),
            'nationality' => $this->request->getVar('nationality'),
            'religion' => $this->request->getVar('religion'),
            'account_id' => $_SESSION['id'],
        ];

        if ($idnum != null) {
            $this->learner->set($data)->where('id', $id)->update();
        } else {
            $this->learner->save($data);
        }

        return view('enrollment/index', $data);
    }
    }

    public function savefamily()  {
        $idnum = $_POST['id'];
        if(!session()->get('isLoggedIn')){
            return redirect()->to('login');
        }
        else{
            $session = session();
            session_start();
            $data = [
            'currentuser' => $_SESSION['username'],
            'id' => $this->request->getVar('id'),
            'relation' => $this->request->getVar('relation'), 
            'fullname' => $this->request->getVar('fullname'), 
            'res_add' => $this->request->getVar('res_add'),
            'off_add' => $this->request->getVar('off_add'), 
            'mob_num' => $this->request->getVar('mob_num'), 
            'off_num' => $this->request->getVar('off_num'), 
            'email' => $this->request->getVar('email'), 
            'occupation' => $this->request->getVar('occupation'),
            'account_id' => $_SESSION['id'],
        ];

        if ($idnum != null) {
            $this->family->set($data)->where('id', $id)->update();
        } else {
            $this->family->save($data);
        }

        return view('enrollment/index', $data);
    }
    }

    
    public function saveschool()  {
        $idnum = $_POST['id'];
        if(!session()->get('isLoggedIn')){
            return redirect()->to('login');
        }
        else{
            $session = session();
            session_start();
            $data = [
            'currentuser' => $_SESSION['username'],
            'id' => $this->request->getVar('id'),
            'grade' => $this->request->getVar('grade'),
            'school_name' => $this->request->getVar('school_name'), 
            'level' => $this->request->getVar('level'),
            'period' => $this->request->getVar('period'), 
            'account_id' => $_SESSION['id'],
        ];

        if ($idnum != null) {
            $this->school->set($data)->where('id', $id)->update();
        } else {
            $this->school->save($data);
        }

        return view('enrollment/index', $data);
    }
    }

}
