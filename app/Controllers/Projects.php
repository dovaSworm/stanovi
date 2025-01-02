<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\ProjektModel;

class Projects extends BaseController
{
    protected $projekt;
    protected $validation;
    protected $session;
    public function __construct()
    {
        $this->projekt = new ProjektModel();
        $this->validation = service('validation');
        $this->session = service('session');
    }
    public function index(): string
    {
        $projekti = $this->projekt->getProjects();
        $data = [
            'projekti' => $projekti,
            'title' => 'Termometal - Projekti',
        ];
        return view('templates/header', $data)
            . view('templates/projects')
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
