<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AccountModel;

class StudentController extends BaseController
{
    public function index()
    {
        //
    }

    public function register()
    {
        helper(['form']);
        $rules =[
            'username' => 'required|min_length[4]|max_length[100]|is_unique[accounts.username]',
            'email' => 'valid_email|is_unique[accounts.email]',
            'password' =>'required|min_length[4]|max_length[50]',
            'confirmpassword' => 'matches[password]',
        ];
            if($this->validate($rules)){
            $account = new AccountModel();

            $data =[
            'username' => $this->request->getVar('username'),
            'email' => $this->request->getVar('email'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            'role' => 'student',
            ];

            $account->save($data);

            return redirect()->to('/');
        }else{
            $data['validation'] = $this->validator;
            return redirect()->to('/reg');
            };
    }

}
