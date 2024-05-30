<?php

namespace Chien\XuongOop\Controllers\Client;

use Chien\XuongOop\Commons\Controller;


class HomeController extends Controller
{
    public function index(){
        $name = 'Chiến';

        $this->renderViewClient('home', [
            'name' => $name
        ]);
    }
}