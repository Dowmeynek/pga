<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TeacherModel;

class TeacherController extends BaseController
{
    private $teacher;
    public function __construct()
    {
        $this->teacher = new TeacherModel();
  
    }
    public function addTeacher()
    {
           $data['teacher'] = $this->teacher->findAll();

    return view('admin/content/teacher/addteacher', $data);
    }
    public function save()  {
        $id = $_POST['id'];
        $data = [
            'idnum' => $this->request->getVar('idnum'),
            'fname' => $this->request->getVar('fname'),
            'mname' => $this->request->getVar('mname'),
            'lname' => $this->request->getVar('lname'),
            'dob' => $this->request->getVar('dob'),
        
        ];

        if ($id != null) {
            $this->teacher->set($data)->where('id', $id)->update();
        } else {
            $this->teacher->save($data);
        }

        $data = [
            'teacher' => $this->teacher->findAll(),
            '$teach' => $this->teacher->where('id', $id)->first(),
        ];

        return view('admin/content/teacher/addteacher', $data);
    }

    public function delete($id)
    {
        $this->teacher->delete($id);

        $data = [
            'teacher' => $this->teacher->findAll(),
            '$teach' => $this->teacher->where('id', $id)->first(),
        ];

        return view('admin/content/teacher/addteacher', $data);
    }

    public function edit($id)
    {
        $data = [
            'teacher' => $this->teacher->findAll(),
            'teach' => $this->teacher->where('id', $id)->first(),
        ];

        return view('admin/content/teacher/addteacher', $data);
    }

    public function teach($teacher)
    {
        echo $teacher;
    }
    public function teacher(){
        if(!session()->get('isLoggedIn')){
            return redirect()->to('/');
        }
        else{
            $session = session();
            session_start();
            $data = [
                'currentuser' => $_SESSION['username'],
            ];
            return view ('teacher', $data);
        }
    }
}
