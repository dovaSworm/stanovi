<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\UserModel;

helper(['form', 'validation',]);
class Users extends ResourceController
{
    protected $user;
    protected $validation;
    public function __construct()
    {
        $this->user = new UserModel();
        $this->validation = service('validation');
    }

    public function index()
    {
        $data['title'] = 'Sign in';
        return view('templates/header', $data)
            . view('users/login')
            . view('templates/footer');
    }
    public function register()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $password2 = $this->request->getPost('password2');

        $data = [
            'username' => $username,
            'password' => $password,
            'password2' => $password2,
        ];
        $this->validation->setRuleGroup('signup');
        // $enc_password = md5($this->input->post('password'));
        if (! $this->validation->run($data)) {
            $errors = $this->validation->getErrors();
        } else {
            $validatedData = $this->validation->getValidated();
            $usr = $this->user->addUser($validatedData['username'], $validatedData['password']);
            return  json_encode($usr);
        }
    }
    public function add()
    {
        $data['title'] = 'Unesi novog korisnika';
        echo $data['title'];
        return view('templates/header', $data)
            . view('users/register')
            . view('templates/footer');
    }
    public function login()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $data = [
            'username' => $username,
            'password' => $password,
            'title' => 'Log in',
        ];
        $this->validation->setRuleGroup('signin');
        if (! $this->validation->run($data)) {
            $errors = $this->validation->getErrors();
        } else {
            $validatedData = $this->validation->getValidated();
            $usr = $this->user->getUserByName($validatedData['username'], $validatedData['password']);
            $data = [
                'user' => $usr,
                'title' => 'HOME',
            ];
            $this->session->set($usr); 
            return view('templates/header', $data)
                . view('pages/home')
                . view('templates/footer');
        }
        // echo $usr->uloga;
        //********************* */ ZA RESTfull  **********************
        //return json_encode($usr);
    }

    public function logout()
    {
        $data['title'] = 'Sign in';
        return view('templates/header', $data)
            . view('users/login')
            . view('templates/footer');
    }
}
