<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\EnrollmentModel;
use App\Models\StudentParents;
use App\Models\SchoolAttended;


class EnrollmentController extends BaseController
{
    private $enrollment;
    public function __construct()
    {
        $this->enrollment = new EnrollmentModel();
        $this->parent = new StudentParents();
        $this->schools = new SchoolAttended();
  
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
            $this->enrollment->set($data)->where('id', $id)->update();
        } else {
            $this->enrollment->save($data);
        }

        return view('enrollment', $data);
    }
    }

    public function saveparent()  {
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
            'mother_fullname' => $this->request->getVar('mother_fullname'), 
            'mom_res_add' => $this->request->getVar('mom_res_add'),
            'mom_off_add' => $this->request->getVar('mom_off_add'), 
            'mom_mob_num' => $this->request->getVar('mom_mob_num'), 
            'mom_off_num' => $this->request->getVar('mom_off_num'), 
            'mother_email' => $this->request->getVar('mother_email'), 
            'mother_occupation' => $this->request->getVar('mother_occupation'),
            'father_fullname' => $this->request->getVar('father_fullname'), 
            'dad_res_add' => $this->request->getVar('dad_res_add'), 
            'dad_off_add' => $this->request->getVar('dad_off_add'), 
            'dad_mob_num' => $this->request->getVar('dad_mob_num'), 
            'dad_off_num' => $this->request->getVar('dad_off_num'),  
            'father_email' => $this->request->getVar('father_email'), 
            'father_occupation' => $this->request->getVar('father_occupation'),
            'account_id' => $_SESSION['id'],
        ];

        if ($idnum != null) {
            $this->parent->set($data)->where('id', $id)->update();
        } else {
            $this->parent->save($data);
        }

        return view('enrollment', $data);
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
            'pre_school' => $this->request->getVar('pre_school'), 
            'pre_sch_level' => $this->request->getVar('pre_sch_level'),
            'pre_sch_period' => $this->request->getVar('pre_sch_period'), 
            'grade_sch_g1_g3' => $this->request->getVar('grade_sch_g1_g3'), 
            'grade_g1_g3_level' => $this->request->getVar('grade_g1_g3_level'),
            'grade_g1_g3_period' => $this->request->getVar('grade_g1_g3_period'), 
            'grade_sch_g4_g6' => $this->request->getVar('grade_sch_g4_g6'), 
            'grade_g4_g6_level' => $this->request->getVar('grade_g4_g6_level'), 
            'grade_g4_g6_period' => $this->request->getVar('grade_g4_g6_period'), 
            'junior_sch_g7_g10' => $this->request->getVar('junior_sch_g7_g10'), 
            'junior_g7_g10_level' => $this->request->getVar('junior_g7_g10_level'),
            'junior_g7_g10_period' => $this->request->getVar('junior_g7_g10_period'),
            'account_id' => $_SESSION['id'],
        ];

        if ($idnum != null) {
            $this->schools->set($data)->where('id', $id)->update();
        } else {
            $this->schools->save($data);
        }

        return view('enrollment', $data);
    }
    }

}
