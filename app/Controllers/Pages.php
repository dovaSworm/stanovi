<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;

use function PHPUnit\Framework\equalToIgnoringCase;

class Pages extends BaseController
{

    public function index()
    {
        return view('welcome_message');
    }
    public function view(string $page = 'home')
    {
        $data['title'] = ucfirst($page); // Capitalize the first letter
        if (! is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            echo $page . ' iz pages controllera viewa';
            throw new PageNotFoundException($page);
            // if ($page == 'users') {
            // return view('templates/header', $data)
            //     . view('pages/home')
            //     . view('templates/footer');
            // }
        }


        // if ($page == 'home') {
        echo $page . ' iz pages controllera gore';
        return view('templates/header', $data)
            . view('pages/' . $page)
            . view('templates/footer');
        // }
    }
}
