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
                $data['error_msg'] = 'Invalid Email or Password';
            } else {
                $model = new User();
                $user = $model->where('email', $this->request->getVar('email'))->first();

                if ($user['status'] == 1) {
                    $this->setUser($user);
                    return redirect()->to('dashboard');
                }
                $link = base_url('resend/' . $user['id'] . '/' . $user['email']);

                $data['error_msg'] = 'Your Account is not yet active. Please check your email for instructions to activate your account.<br>';
                $data['error_msg'] .= 'Did not receive any email? <a href="' . $link . '"> Resend Verification Email</a>';
            }
        }

        // Load view 
        $data['title'] = 'Login';
        return view('auth/login', $data);
    }

    private function setUser($user)
    {
        $data = [
            'userid' => $user['id'],
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

                $verify_token = random_string('alnum', '16');

                $userData = array(
                    'name' => strip_tags($this->request->getPost('name')),
                    'phone' => strip_tags($this->request->getPost('phone')),
                    'email' => strip_tags($this->request->getPost('email')),
                    'password' => $this->request->getPost('password'),
                    'organization' => strip_tags($this->request->getPost('organization')),
                    'course' => strip_tags($this->request->getPost('course')),
                    'hours' => strip_tags($this->request->getPost('hours')),
                    'status' => 0,
                    'verify_token' => $verify_token,
                );

                $model = new User();
                $model->save($userData);

                $link = base_url('verify/' . $verify_token);
                $data = [
                    'to' => $userData['email'],
                    'subject' => 'Welcome | Datazen Online',
                    'message' => welcome_email($link),
                ];

                $this->send_email($data);

                // $this->session->setFlashData('success', 'successful registeration');
                $this->session->setFlashData('success', 'Your account registration has been successful. Verify your acount and login following the instruction sent to your email.');
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

    public function forgot()
    {
        if ($this->request->getPost()) {

            $rules = [
                'email' => 'required|valid_email|user_exist[email]',
            ];

            if (!$this->validate($rules)) {
                $data['error_msg'] = 'There is no account associated with this email address.';
            } else {
                $model = new User();
                $user = $model->where('email', $this->request->getVar('email'))->first();

                $reset_token = random_string('alnum', '16');
                $model->save([
                    'id'    => $user['id'],
                    'pass_reset_token' => $reset_token
                ]);

                $emailData = [
                    'to' => $user['email'],
                    'subject' => 'Password Reset | Datazen',
                    'message' => password_reset_email($reset_token),
                ];

                $success = $this->send_email($emailData);

                if ($success) {
                    set_alert('success', 'Instructions to reset your password has been sent to your email');
                } else {
                    set_alert('error_msg', 'Somethnig went wrong, could not send email.');
                }
                return redirect()->to('forgot-password');
            }
        }

        $data['title'] = 'Forgot Password';
        return view('auth/forgot_password', $data);
    }

    public function reset($token)
    {
        // $data['error_msg'] = 'There is no account associated with this email address.';
        $model = new User();
        $user = $model->where('pass_reset_token', $token)->first();

        if (!$user) {
            return view('errors/html/error_404');
        }

        if ($this->request->getPost()) {

            $rules = [
                'password' => 'required|min_length[6]|max_length[16]',
                'password_confirm' => 'matches[password]',
            ];

            if (!$this->validate($rules)) {
                $data['error_msg'] = 'Password Do not Match. or is less than 6 characters';
            } else {

                $model->save([
                    'id'    => $user['id'],
                    'pass_reset_token' => null,
                    'password' => $this->request->getVar('password'),
                ]);
                set_alert('success', 'Your Password has been set successfuly, You can login now');
                return redirect()->to('/');
            }
        }

        $data['title'] = 'Reset Password';
        return view('auth/reset_password', $data);
    }

    public function verify($token)
    {
        $model = new User();

        $user = $model->where('verify_token', $token)->first();
        if (!$user) {
            return error_404();
        }

        $model->save([
            'id' => $user['id'],
            'verify_token' => null,
            'status' => 1,
        ]);

        $this->session->setFlashData('success', 'Email has been Veerified. You can login now.');
        return redirect()->to('/login');
    }

    public function resend_link($id, $email)
    {
        $model = new User();
        $user = $model->find($id);

        if ($user && $user['email'] == $email) {

            if (!$user['verify_token']) {
                $user['verify_token'] = random_string('alnum', 16);
                $model->save([
                    'id' => $user['id'],
                    'verify_token' => $user['verify_token'],
                ]);
            }

            $link = base_url('verify/' . $user['verify_token']);
            $data = [
                'to' => $user['email'],
                'subject' => 'Welcome | Datazen Online',
                'message' => welcome_email($link),
            ];

            $this->send_email($data);
            // $this->session->setFlashData('success', 'successful registeration');
            $this->session->setFlashData('success', 'Email has been resent to your registered email.<br> Verify your acount and login following the instruction sent to your email.');
            return redirect()->to('/login');
        } else {
            return error_404();
        }
    }

    public function send_email($data)
    {
        $email = \Config\Services::email();
        $email->setTo($data['to']);
        $email->setMessage($data['message']);
        $email->setSubject($data['subject']);

        if ($email->send()) {
            return true;
        }

        return false;
        // log error
        // return $email->printDebugger(['headers']);
    }
}
