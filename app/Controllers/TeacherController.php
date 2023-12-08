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

        return redirect()->to('/addTeacher');
    }

    public function delete($id)
    {
        $this->teacher->delete($id);
        return redirect()->to('/addTeacher');
    }

    public function edit($id)
    {
        $data = [
            'teacher' => $this->teacher->findAll(),
            '$teach' => $this->teacher->where('id', $id)->first(),
        ];

        if (!$data['$teach']) {
            echo 'ERROR';
        }

        return view('admin/content/teacher/addteacher', $data);
    }

public function teach($teacher)
    {
        echo $teacher;
    }
}
