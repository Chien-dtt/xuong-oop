<?php

namespace Chien\XuongOop\Controllers\Client;

use Chien\XuongOop\Commons\Controller;


class HomeController extends Controller
{
    public function index() {

        $name = 'Chien';
        $this->renderViewClient('home', [
            'name' => $name
        ]);
    }
}