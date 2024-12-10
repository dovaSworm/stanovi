<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = ['dane', 'dane'];
        echo base_url();
        return view('welcome_message', $data);
    }
}
