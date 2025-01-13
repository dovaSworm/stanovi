<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\UserModel;

class Users extends BaseController
{
    protected $validation;
    protected $session;
    protected $url;
    public function __construct()
    {
        $this->validation = service('validation');
        $this->url = service('url');
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
        if (!$this->session->has('user')) {
            return redirect()->to('users');
        }
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
            echo "GRESKA";
            $errors = $this->validation->getErrors();
        } else {
            $validatedData = $this->validation->getValidated();
            $usr = $this->user->addUser($validatedData['username'], $validatedData['password']);
            $this->session->set('newuser', $usr);
            return redirect()->back()->withInput();
        }
    }
    public function add()
    {
        if (!$this->session->has('user')) {
            return redirect()->to('users');
        }
        $data['title'] = 'Unesi novog korisnika';
        return view('templates/header', $data)
            . view('users/panel')
            . view('users/adduser')
            . view('templates/footer');
    }
    public function getById(...$slug)
    {
        if (!$this->session->has('user')) {
            return redirect()->to('users');
        }
        $data = [
            'title' => 'Izmeni korisnika2'
        ];
        if ($this->request->isAJAX()) {
            $id = $this->request->getGet('id');
            $this->session->set('getovid', $id);
            $getuser = $this->user->getById($id);
            $data['getuser'] = $getuser;
            return json_encode($data);
        } else {
            $id = $this->request->getGet('getid');
            $getuser = $this->user->getById($id);
            $users = $this->user->getUsers();
            $data['users'] = $users;
            $data['getuser'] = $getuser;
            return view('templates/header', $data)
                . view('users/panel')
                . view('users/edit')
                . view('templates/footer');
        }
    }
    public function modify()
    {
        if (!$this->session->has('user')) {
            return redirect()->to('users');
        }
        $id = $this->request->getPost('getov');
        $ime = $this->request->getPost('ime');
        $sifra = $this->request->getPost('sifra');
        $novasifra = $this->request->getPost('novasifra');
        $uloga = $this->request->getPost('uloga');
        $users = $this->user->getUsers();
        $data = [
            'id' => $id,
            'ime' => $ime,
            'novasifra' => $novasifra,
            'sifra' => $sifra,
            'uloga' => $uloga,
            'title' => 'Izmena korisnika',
        ];
        $data['users'] = $users;

        $this->validation->setRuleGroup('modifyeuser');
        if (!$this->validation->run($data)) {
            $errors = $this->validation->getErrors();
            return view('templates/header', $data)
                . view('users/panel')
                . view('users/edit')
                . view('templates/footer');
        } else {
            $validatedData = $this->validation->getValidated();
            $novasifra = $validatedData['novasifra'];
            $usr = [
                'id' => $data['id'],
                'ime' => $data['ime'],
                'sifra' => $data['novasifra'],
                'uloga' => $data['uloga'],
            ];
            $this->user->modify($usr);
            $data['users'] = $users;
            return view('templates/header', $data)
                . view('users/panel')
                . view('users/edit')
                . view('templates/footer');
        }
    }
    public function edit()
    {
        // return $this->session->get('user')['uloga'];
        if (!$this->session->has('user')) {
            return redirect()->to('users');
        }
        $users = $this->user->getUsers();
        $data = [
            'title' => 'Izmeni korisnika',
            'users' => $users,
        ];
        return view('templates/header', $data)
            . view('users/panel')
            . view('users/edit')
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
        if (!$this->validation->run($data)) {
            $errors = $this->validation->getErrors();
            return redirect()->back()->withInput();
        } else {
            $validatedData = $this->validation->getValidated();
            $usr = $this->user->getUserByName($validatedData['username'], $validatedData['password']);
            $data = [
                'user' => $usr,
                'title' => 'Log in',
            ];
            $this->session->set('user', $usr);
            return redirect()->to('users/panel');
        }
        //********************* */ ZA RESTfull  **********************
        //return json_encode($usr);
    }
    public function panel()
    {
        if (!$this->session->has('user')) {
            return redirect()->to('users');
        }
        $data = [
            'user' => 'DUMMY',
            'title' => 'Korisnički portal'
        ];
        return view('templates/header', $data)
            . view('users/panel')
            . view('templates/footer');
    }
    public function logout()
    {
        $this->session->remove('user');
        return redirect()->to('users');
    }
}
