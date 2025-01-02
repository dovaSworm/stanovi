<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\ProjektModel;
use App\Models\StanModel;

class Home extends BaseController
{
    protected $projekt;
    protected $stan;
    protected $validation;
    protected $session;
    public function __construct()
    {
        $this->projekt = new ProjektModel();
        $this->stan = new StanModel();
        $this->validation = service('validation');
        // $this->session = service('session');
    }
    public function index(): string
    {

        $stanovi = $this->stan->getStanovi();
        // echo ($stanovi);
        $data = [
            'stanovi' => $stanovi,
            'title' => 'Termometal',
        ];
        return view('templates/header', $data)
            . view('templates/home')
            . view('templates/footer');
    }

    // public function projects(): string
    // {

    //     $data['title'] = 'Projects';
    //     return view('templates/header', $data)
    //         . view('templates/projects')
    //         . view('templates/footer');
    // }
}
