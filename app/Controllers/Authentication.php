<?php

namespace App\Controllers;

use App\Models\User;

defined('APPPATH') or exit('No direct script access allowed');

class Authentication extends BaseController
{
    protected $user;

    function __construct()
    {
        $this->session = \config\Services::session();
        $this->user = new User();

        // User login status 
        $this->isUserLoggedIn = $this->session->get('isUserLoggedIn');
    }

    public function index()
    {
        if ($this->isUserLoggedIn) {
            redirect(base_url('/account'));
        } else {
            redirect(base_url('/login'));
        }
    }

    public function account()
    {
        $data = array();
        if ($this->isUserLoggedIn) {
            $con = array(
                'id' => $this->session->get('userId')
            );
            $data['user'] = $this->user->getRows($con);

            // Pass the user data and load view 
            return view('auth/account', $data);
        } else {
            redirect('users/login');
        }
    }

    public function login()
    {
        $data = array();

        // Get messages from the session 
        if ($this->session->get('success_msg')) {
            $data['success_msg'] = $this->session->get('success_msg');
            $this->session->remove('success_msg');
        }
        if ($this->session->get('error_msg')) {
            $data['error_msg'] = $this->session->get('error_msg');
            $this->session->remove('error_msg');
        }

        // If login request submitted 
        if ($this->request->getPost()) {
            $rules = [
                'email' => 'required|valid_email',
                'password' => 'required|validateUser{email,password}',
            ];


            if ($this->validate($rules)) {
                // $con = array(
                //     'returnType' => 'single',
                //     'conditions' => array(
                //         'email' => $this->request->getPost('email'),
                //         'password' => md5($this->request->getPost('password')),
                //         'status' => 1
                //     )
                // );

                // $checkLogin = $this->user->find($con);
                // if ($checkLogin) {
                //     $this->session->set('isUserLoggedIn', TRUE);
                //     $this->session->set('userId', $checkLogin['id']);
                //     redirect('users/account/');
                // } else {
                //     $data['error_msg'] = 'Wrong email or password, please try again.';
                // }
            } else {
                $data['error_msg'] = 'Please fill all the mandatory fields.';
            }
        }

        // Load view 
        $data['title'] = 'Login';
        return view('auth/login', $data);
    }

    // public function registration()
    // {
    //     $data = $userData = array();
    //     $validation = \Config\Services::validation();

    //     // If registration request is submitted 
    //     if ($this->request->getPost()) {
    //         $validation->set_rules('first_name', 'First Name', 'required');
    //         $validation->set_rules('last_name', 'Last Name', 'required');
    //         $validation->set_rules('email', 'Email', 'required|valid_email|callback_email_check');
    //         $validation->set_rules('password', 'password', 'required');
    //         $validation->set_rules('conf_password', 'confirm password', 'required|matches[password]');

    //         $userData = array(
    //             'first_name' => strip_tags($this->request->getPost('first_name')),
    //             'last_name' => strip_tags($this->request->getPost('last_name')),
    //             'email' => strip_tags($this->request->getPost('email')),
    //             'password' => md5($this->request->getPost('password')),
    //             'gender' => $this->request->getPost('gender'),
    //             'phone' => strip_tags($this->request->getPost('phone'))
    //         );

    //         if ($this->form_validation->run() == true) {
    //             $insert = $this->user->insert($userData);
    //             if ($insert) {
    //                 $this->session->set('success_msg', 'Your account registration has been successful. Please login to your account.');
    //                 redirect('users/login');
    //             } else {
    //                 $data['error_msg'] = 'Some problems occured, please try again.';
    //             }
    //         } else {
    //             $data['error_msg'] = 'Please fill all the mandatory fields.';
    //         }
    //     }

    //     // Posted data 
    //     $data['user'] = $userData;
    //     $data['title'] = 'Register';
    //     // Load view 
    //     return view('auth/registration', $data);
    // }

    public function logout()
    {
        $this->session->remove('isUserLoggedIn');
        $this->session->remove('userId');
        $this->session->sess_destroy();
        redirect('users/login/');
    }


    // Existing email check during validation 
    // public function email_check($str)
    // {
    //     $validation = \Config\Services::validation();

    //     $cond = array(
    //         'returnType' => 'count',
    //         'conditions' => array(
    //             'email' => $str
    //         )
    //     );

    //     $checkEmail = $this->user->getRows($cond);
    //     if ($checkEmail > 0) {
    //         $validation->set_message('email_check', 'The given email already exists.');
    //         return FALSE;
    //     } else {
    //         return TRUE;
    //     }
    // }
}
