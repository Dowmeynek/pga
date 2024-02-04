<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LearnerModel;
use App\Models\StudentMother;
use App\Models\StudentFather;
use App\Models\StudentGuardian;
use App\Models\PreSchoolModel;
use App\Models\Grade1_3Model;
use App\Models\Grade4_6Model;
use App\Models\JuniorModel;


class EnrollmentController extends BaseController
{
    private $enrollment;
    public function __construct()
    {
        $this->learner = new LearnerModel();
        $this->mother = new StudentMother();
        $this->father = new StudentFather();
        $this->guardian = new StudentGuardian();
        
        $this->preschool = new PreSchoolModel();
        $this->g1_g3 = new Grade1_3Model();
        $this->g4_g6 = new Grade4_6Model();
        $this->junior = new JuniorModel();
  
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

    public function savemother()  {
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
            'account_id' => $_SESSION['id'],
        ];

        if ($idnum != null) {
            $this->mother->set($data)->where('id', $id)->update();
        } else {
            $this->mother->save($data);
        }

        return view('enrollment/index', $data);
    }
    }

    public function savefather()  {
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
            $this->father->set($data)->where('id', $id)->update();
        } else {
            $this->father->save($data);
        }

        return view('enrollment/index', $data);
    }
    }

    public function saveguardian()  {
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
            'gua_fullname' => $this->request->getVar('gua_fullname'), 
            'gua_res_add' => $this->request->getVar('gua_res_add'),
            'gua_off_add' => $this->request->getVar('gua_off_add'), 
            'gua_mob_num' => $this->request->getVar('gua_mob_num'), 
            'gua_off_num' => $this->request->getVar('gua_off_num'), 
            'gua_email' => $this->request->getVar('gua_email'), 
            'gua_occupation' => $this->request->getVar('gua_occupation'),
            'account_id' => $_SESSION['id'],
        ];

        if ($idnum != null) {
            $this->guardian->set($data)->where('id', $id)->update();
        } else {
            $this->guardian->save($data);
        }

        return view('enrollment/index', $data);
    }
    }

    
    public function savepreschool()  {
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
            'account_id' => $_SESSION['id'],
        ];

        if ($idnum != null) {
            $this->preschool->set($data)->where('id', $id)->update();
        } else {
            $this->preschool->save($data);
        }

        return view('enrollment/index', $data);
    }
    }

    public function saveg1_g3()  {
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
            'grade_sch_g1_g3' => $this->request->getVar('grade_sch_g1_g3'), 
            'grade_g1_g3_level' => $this->request->getVar('grade_g1_g3_level'),
            'grade_g1_g3_period' => $this->request->getVar('grade_g1_g3_period'), 
            'account_id' => $_SESSION['id'],
        ];

        if ($idnum != null) {
            $this->g1_g3->set($data)->where('id', $id)->update();
        } else {
            $this->g1_g3->save($data);
        }

        return view('enrollment/index', $data);
    }
    }

    public function saveg4_g6()  {
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
            'grade_sch_g4_g6' => $this->request->getVar('grade_sch_g4_g6'), 
            'grade_g4_g6_level' => $this->request->getVar('grade_g4_g6_level'),
            'grade_g4_g6_period' => $this->request->getVar('grade_g4_g6_period'), 
            'account_id' => $_SESSION['id'],
        ];

        if ($idnum != null) {
            $this->g4_g6->set($data)->where('id', $id)->update();
        } else {
            $this->g4_g6->save($data);
        }

        return view('enrollment/index', $data);
    }
    }

    public function savejunior()  {
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
            'junior_sch_g7_g10' => $this->request->getVar('junior_sch_g7_g10'), 
            'junior_g7_g10_level' => $this->request->getVar('junior_g7_g10_level'),
            'junior_g7_g10_period' => $this->request->getVar('junior_g7_g10_period'),
            'account_id' => $_SESSION['id'],
        ];

        if ($idnum != null) {
            $this->junior->set($data)->where('id', $id)->update();
        } else {
            $this->junior->save($data);
        }

        return view('enrollment/index', $data);
    }
    }


}
