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
        $this->isUserLoggedIn = $this->session->get('isUserLoggedIn') == 1 ? true : false;
    }

    public function index()
    {
        return redirect()->to('dashboard');
    }

    public function account()
    {
        $data = array();
        $con = array(
            'id' => $this->session->get('userId')
        );
        $data['user'] = $this->user->getRows($con);

        // Pass the user data and load view 
        return view('account', $data);
    }

    public function login()
    {
        $data = array();

        // If login request submitted 
        if ($this->request->getPost()) {
            $rules = [
                'email' => 'required|valid_email',
                'password' => 'required|validateUser[email,password]',
            ];


            if (!$this->validate($rules)) {
                $data['error_msg'] = 'Invalid Credentials.';
            } else {
                $model = new User();
                $user = $model->where('email', $this->request->getVar('email'))->first();

                $this->setUser($user);
                return redirect()->to('learn');
            }
        }

        // Load view 
        $data['title'] = 'Login';
        return view('auth/login', $data);
    }

    private function setUser($user)
    {
        $data = [
            'id' => $user['id'],
            'name' => $user['name'],
            'email' => $user['email'],
            'logged_in' => 1,
        ];

        $this->session->set($data);
        return true;
    }

    public function registration()
    {
        $data = $userData = array();

        // If registration request is submitted 
        if ($this->request->getPost()) {

            $rules = [
                'email' => 'required|valid_email|is_unique[users.email]',
                'password' => 'required|min_length[6]|max_length[16]',
                // 'password_confirm' => 'matches[password]',
                'name' => 'required|min_length[6]',
                'phone' => 'required|min_length[6]',
                'organization' => 'required|min_length[3]',
                'course' => 'required',
                'hours' => 'required',
            ];

            if (!$this->validate($rules)) {
                $data['error_msg'] = $this->validator;
            } else {
                $userData = array(
                    'name' => strip_tags($this->request->getPost('name')),
                    'phone' => strip_tags($this->request->getPost('phone')),
                    'email' => strip_tags($this->request->getPost('email')),
                    'password' => $this->request->getPost('password'),
                    'organization' => strip_tags($this->request->getPost('organization')),
                    'course' => strip_tags($this->request->getPost('course')),
                    'hours' => strip_tags($this->request->getPost('hours')),
                    'status' => 0,
                );

                $model = new User();
                $model->save($userData);

                $this->session->setFlashData('success', 'successful_registeration');

                $this->session->set('success_msg', 'Your account registration has been successful. Please login to your account.');
                return redirect()->to('login');
            }
        }

        // Posted data 
        $data['user'] = $userData;
        $data['title'] = 'Register';
        // Load view 
        return view('auth/register', $data);
    }

    public function logout()
    {
        $this->session->remove('logged_in');
        $this->session->remove('userId');
        $this->session->remove('name');
        $this->session->remove('email');
        $this->session->destroy();

        return redirect()->to('login');
    }
}
