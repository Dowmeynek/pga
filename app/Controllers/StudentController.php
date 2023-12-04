<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class StudentController extends BaseController
{
    private $student;

    public function __construct()
    {
        $this->student = new \App\Models\StudentModel(); 
    }

    public function pga()
    {
        $data['student'] = $this->student->findAll();
        return view('students', $data);
    }

    public function save()
{
    $id = $_POST['id'];
    $data = [
        'id_number' => $this->request->getVar('id_number'),
        'first_name' => $this->request->getVar('first_name'),
        'middle_name' => $this->request->getVar('middle_name'),
        'last_name' => $this->request->getVar('last_name'),
        'address' => $this->request->getVar('address'),
        'email' => $this->request->getVar('email'),
        'phone_number' => $this->request->getVar('phone_number'),
        'dob' => $this->request->getVar('dob'),
        'gender' => $this->request->getVar('gender'),
        'photo' => $this->request->getFile('photo'),
    ];

    if ($id != null) {
        // Update existing record
        $this->student->set($data)->where('id', $id)->update();
    } else {
        // Insert new record
        if ($this->student->save($data)) {
            // Student added successfully
            session()->setFlashdata('message', 'Student added to record');
        } else {
            // Error occurred
            session()->setFlashdata('error', 'An error has occurred');
        }
    }

    return view('index');
}


    

    public function student($student)
    {
        echo $student; 
    }

    public function index()
    {
        // Your existing code for the index method
    }
}
