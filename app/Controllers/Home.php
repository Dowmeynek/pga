<?php

namespace App\Controllers;
use App\Models\AccountModel;
class Home extends BaseController
{
    public function index()
    {
        if(!session()->get('isLoggedIn')){
            return redirect()->to('/');
        }
        else{
            $session = session();
            session_start();
            $data = [
                'currentuser' => $_SESSION['username'],
            ];
            return view('index', $data);
        }
    }
    public function logreg()
    {
        helper(['form']);
        return view('logreg/index');
    }
    public function reg()
    {
        helper(['form']);
        return view('logreg/reg/register');
    }
    public function ab()
    {
        return view('home/about');
    }


    public function Logout() {
        $session = session();
        session_destroy();
        return redirect()->to('/');
    }

    public function LoginAuth() {

        $session = session();
        $account = new AccountModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $data = $account->where('username', $username)->first();
        if($data){
            $pass = $data['password'];
            $authenticatePassword = password_verify($password, $pass);
                
            if($authenticatePassword){
                    $ses_data = [
                        'id' => $data['id'],
                        'username' => $data['username'],
                        'role' => $data['role'],
                        'isLoggedIn' => TRUE,
                    ];
                    $session->set($ses_data);

                    if($_SESSION['role'] == 'student'){
                        return redirect()->to('/student');
                    }
                    else if($_SESSION['role'] == 'teacher'){
                        return redirect()->to('/teacher');
                    }
                    else{
                        return redirect()->to('/admins');
                    }
                }
                else{
                $session->setFlashdata('msg','Password is incorrect.');
                return redirect()->to('/');
                }
            }
            else
            {
                $session->setFlashdata('msg','Email does not exist.');
                return redirect()->to('/');
            };
    }

}
