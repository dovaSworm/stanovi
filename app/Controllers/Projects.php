<?php

namespace App\Controllers;

use App\Models\SlikeModel;
use App\Models\ProjektModel;

class Projects extends BaseController
{
    protected $projekt;
    protected $validation;
    protected $session;
    protected $url;
    protected $helpers = ['form'];
    public function __construct()
    {
        $this->projekt = new ProjektModel();
        $this->validation = service('validation');
        $this->url = service('url');
        $this->session = service('session');
    }

    public function add()
    {
        if (!$this->session->has('user')) {
            return redirect()->to('users');
        }
        $data['title'] = 'Unesi novi projekt';
        return view('templates/header', $data)
            . view('users/panel')
            . view('projects/addproject')
            . view('templates/footer');
    }
    public function edit()
    {
        if (!$this->session->has('user')) {
            return redirect()->to('users');
        }
        $data['title'] = 'Izmeni projekt';
        $projects = $this->projekt->getAllProjects();
        $data['projects'] = $projects;
        return view('templates/header', $data)
            . view('users/panel')
            . view('projects/edit')
            . view('templates/footer');
    }
    public function deleteslika($id)
    {
        if (!$this->session->has('user')) {
            return redirect()->to('users');
        }
        // if ($this->request->isAJAX()) {
        $proj_id = $this->session->get('getovid');
        $slikaModel = new SlikeModel();
        $slikaModel->deleteSlika($id, 'projekti');
        $getproj = $this->projekt->getById($proj_id);
        $data = [
            'getproj' => $getproj
        ];
        return json_encode($data);
    }
    public function getById()
    {
        if (!$this->session->has('user')) {
            return redirect()->to('users');
        }
        $data = [
            'title' => 'Izmeni projekt'
        ];

        if ($this->request->isAJAX()) {
            $id = $this->request->getGet('id');
            $this->session->set('getovid', $id);
            $getproj = $this->projekt->getById($id);
            $data['getproj'] = $getproj;
            return json_encode($data);
        } else {
            $id = $this->request->getGet('getid');
            $getproj = $this->projekt->getById($id);
            $projects = $this->projekt->getProjects();
            $data['projects'] = $projects;
            $data['getproj'] = $getproj;
            return view('templates/header', $data)
                . view('users/panel')
                . view('projects/edit')
                . view('templates/footer');
        }
    }
    public function modify()
    {
        if (!$this->session->has('user')) {
            return redirect()->to('users');
        }
        $projects = $this->projekt->getProjects();
        $id = $this->request->getPost('getov');
        $proj_images = [];
        if ($imagefile = $this->request->getFiles()) {
            foreach ($imagefile['images'] as $img) {
                if ($img->isValid() && ! $img->hasMoved()) {
                    $newName = $img->getName();
                    $ext = $img->guessExtension();
                    $nesto = $this->repairImgTitle($newName, $ext);
                    $img->move(ROOTPATH . '/public/slike/projekti/', $nesto);
                    array_push($proj_images, $nesto);
                }
            }
        }
        $naziv = $this->request->getPost('naziv');
        $adresa = $this->request->getPost('adresa');
        $objekat = $this->request->getPost('objekat');
        $lokacija = $this->request->getPost('lokacija');
        $tipovi = $this->request->getPost('tipovi');
        $prostorije = $this->request->getPost('prostorije');
        $parking = $this->request->getPost('parking');
        $novi = $this->request->getPost('novi');
        $stanova = $this->request->getPost('stanova');
        $parkinga = $this->request->getPost('parkinga');
        $garaza = $this->request->getPost('garaza');
        $poslovni = $this->request->getPost('poslovni');
        $godina = $this->request->getPost('godina');
        $project = [
            'id' => $id,
            'novi' => $novi,
            'poslovni' => $poslovni,
            'adresa' => $adresa,
            'garaza' => $garaza,
            'parkinga' => $parkinga,
            'stanova' => $stanova,
            'tipovi' => $tipovi,
            'naziv' => $naziv,
            'objekat' => $objekat,
            'lokacija' => $lokacija,
            'prostorije' => $prostorije,
            'parking' => $parking,
            'godina' => $godina
        ];
        $data['title'] = 'Izmeni projekt';
        $data['projects'] = $projects;
        $this->projekt->modify($project, $proj_images);
        return view('templates/header', $data)
            . view('users/panel')
            . view('projects/edit')
            . view('templates/footer');
    }
    public function repairImgTitle($old, $extension)
    {
        $offset = strlen($extension) + 1;
        $title = str_replace(["č", "ć", "đ", "ž", "š", "Č", "Ć", "Đ", "Ž", "Š", " ", "."], ["c", "c", "dj", "z", "s", "C", "C", "DJ", "Z", "S", "", ""], (substr($old, 0, strlen($old) - $offset)));
        return $title . '.' . $extension;
    }
    public function register()
    {
        if (!$this->session->has('user')) {
            return redirect()->to('users');
        }
        $this->validation->setRuleGroup('imagesRule');
        if (! $this->validateData([], 'imagesRule')) {
            $data = ['errors' => $this->validator->getErrors()];
            $data['title'] = 'GRESKA';
            return view('templates/header', $data)
                . view('users/panel')
                . view('projects/addproject')
                . view('templates/footer');
        }
        // $novi = $this->request->getPost('novi') != null ? 1 : 0;
        $proj_images = [];
        if ($imagefile = $this->request->getFiles()) {
            foreach ($imagefile['images'] as $img) {
                if ($img->isValid() && ! $img->hasMoved()) {
                    $newName = $img->getName();
                    $ext = $img->guessExtension();
                    $nesto = $this->repairImgTitle($newName, $ext);
                    $img->move(ROOTPATH . '/public/slike/projekti/', $nesto);
                    array_push($proj_images, $nesto);
                }
            }
        }
        $naziv = $this->request->getPost('naziv');
        $adresa = $this->request->getPost('adresa');
        $objekat = $this->request->getPost('objekat');
        $lokacija = $this->request->getPost('lokacija');
        $tipovi = $this->request->getPost('tipovi');
        $prostorije = $this->request->getPost('prostorije');
        $parking = $this->request->getPost('parking');
        $novi = $this->request->getPost('novi');
        $stanova = $this->request->getPost('stanova');
        $parkinga = $this->request->getPost('parkinga');
        $garaza = $this->request->getPost('garaza');
        $poslovni = $this->request->getPost('poslovni');
        $godina = $this->request->getPost('godina');
        $project = [
            'novi' => $novi,
            'poslovni' => $poslovni,
            'adresa' => $adresa,
            'garaza' => $garaza,
            'parkinga' => $parkinga,
            'stanova' => $stanova,
            'tipovi' => $tipovi,
            'naziv' => $naziv,
            'objekat' => $objekat,
            'lokacija' => $lokacija,
            'prostorije' => $prostorije,
            'parking' => $parking,
            'godina' => $godina,
        ];
        $this->validation->setRuleGroup('addproject');
        // $enc_password = md5($this->input->post('password'));
        if (! $this->validation->run($project, 'addproject')) {
            echo "GRESKA";
            $errors = $this->validation->getErrors();
        } else {
            $validatedData = $this->validation->getValidated();
            $prj = $this->projekt->addProject($project, $proj_images);
            $this->session->set('newprj', $prj);
            return redirect()->back()->withInput();
        }
    }
}
