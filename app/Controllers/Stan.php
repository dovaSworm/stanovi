<?php

namespace App\Controllers;

use App\Models\SlikeModel;
use App\Models\StanModel;

class Stan extends BaseController
{
    protected $stan;
    protected $validation;
    protected $session;
    protected $url;
    protected $helpers = ['form'];
    public function __construct()
    {
        $this->stan = new StanModel();
        $this->validation = service('validation');
        $this->url = service('url');
        $this->session = service('session');
        if (!$this->session->has('user')) {
            return redirect()->to('users');
        }
    }

    public function add()
    {
        if (!$this->session->has('user')) {
            return redirect()->to('users');
        }
        $data['title'] = 'Unesi stan';
        return view('templates/header', $data)
            . view('users/panel')
            . view('stanovi/addstan')
            . view('templates/footer');
    }
    public function edit()
    {
        if (!$this->session->has('user')) {
            return redirect()->to('users');
        }
        $data['title'] = 'Izmeni stan';
        $stanovi = $this->stan->getStanovi();
        $data['stanovi'] = $stanovi;
        return view('templates/header', $data)
            . view('users/panel')
            . view('stanovi/edit')
            . view('templates/footer');
    }
    public function deleteslika($id)
    {
        if (!$this->session->has('user')) {
            return redirect()->to('users');
        }
        // if ($this->request->isAJAX()) {
        $stan_id = $this->session->get('getovidstana');
        $slikaModel = new SlikeModel();
        $slikaModel->deleteSlika($id, 'stanovi');
        $getstan = $this->stan->getById($stan_id);
        $data = [
            'getstan' => $getstan
        ];
        return json_encode($data);
    }
    public function getById()
    {
        if (!$this->session->has('user')) {
            return redirect()->to('users');
        }
        $data = [
            'title' => 'Izmeni stan'
        ];

        if ($this->request->isAJAX()) {
            $id = $this->request->getGet('id');
            $this->session->set('getovidstana', $id);
            $getstan = $this->stan->getById($id);
            $data['getstan'] = $getstan;
            return json_encode($data);
        } else {
            $id = $this->request->getGet('getid');
            $getstan = $this->stan->getById($id);
            $stanovi = $this->stan->getStanovi();
            $data['stanovi'] = $stanovi;
            $data['getstan'] = $getstan;
            return view('templates/header', $data)
                . view('users/panel')
                . view('stanovi/edit')
                . view('templates/footer');
        }
    }
    public function modify()
    {
        if (!$this->session->has('user')) {
            return redirect()->to('users');
        }
        $stanovi = $this->stan->getStanovi();
        $id = $this->request->getPost('getovidstana');
        if ($img = $this->request->getFile('images')) {
            if ($img->isValid() && ! $img->hasMoved()) {
                $newName = $img->getName();
                $ext = $img->guessExtension();
                $img_title = $this->repairImgTitle($newName, $ext);
                $img->move(ROOTPATH . '/public/slike/stanovi/', $img_title);
            }
        }

        $broj = $this->request->getPost('broj');
        $sprat = $this->request->getPost('sprat');
        $kvadratura = $this->request->getPost('kvadratura');
        $cena = $this->request->getPost('cena');
        $tip = $this->request->getPost('tip');
        $slobodan = $this->request->getPost('slobodan') != null ? 1 : 0;
        $rezervisano = $this->request->getPost('rezervisano') != null ? 1 : 0;
        $prodato = $this->request->getPost('prodato') != null ? 1 : 0;

        $stan = [
            'id' => $id,
            'prodato' => $prodato,
            'sprat' => $sprat,
            'tip' => $tip,
            'broj' => $broj,
            'kvadratura' => $kvadratura,
            'cena' => $cena,
            'slobodan' => $slobodan,
            'rezervisano' => $rezervisano,
        ];
        $data['title'] = 'Izmeni stan';
        $data['stanovi'] = $stanovi;
        $this->stan->modify($stan, $img_title);
        // $modified = $this->stan->getById($stan['id']);
        // $data['stan'] = $modified;
        return view('templates/header', $data)
            . view('users/panel')
            . view('stanovi/edit')
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
                . view('stanovi/addstan')
                . view('templates/footer');
        }
        if ($img = $this->request->getFile('images')) {
            if ($img->isValid() && ! $img->hasMoved()) {
                $newName = $img->getName();
                $ext = $img->guessExtension();
                $img_title = $this->repairImgTitle($newName, $ext);
                $img->move(ROOTPATH . '/public/slike/stanovi/', $img_title);
            }
        }
        $broj = $this->request->getPost('broj');
        $sprat = $this->request->getPost('sprat');
        $kvadratura = $this->request->getPost('kvadratura');
        $cena = $this->request->getPost('cena');
        $tip = $this->request->getPost('tip');
        $slobodan = $this->request->getPost('slobodan') != null ? 1 : 0;
        $rezervisano = $this->request->getPost('rezervisano') != null ? 1 : 0;
        $prodato = $this->request->getPost('prodato') != null ? 1 : 0;

        $stan = [
            'prodato' => $prodato,
            'sprat' => $sprat,
            'tip' => $tip,
            'broj' => $broj,
            'kvadratura' => $kvadratura,
            'cena' => $cena,
            'slobodan' => $slobodan,
            'rezervisano' => $rezervisano,
        ];
        $this->validation->setRuleGroup('addstan');
        if (! $this->validation->run($stan, 'addstan')) {
            echo "GRESKA";
            $errors = $this->validation->getErrors();
        } else {
            $validatedData = $this->validation->getValidated();
            $newstan = $this->stan->addStan($stan, $img_title);

            $this->session->set('newstan', $newstan);
            return redirect()->back()->withInput();
        }
    }
}
