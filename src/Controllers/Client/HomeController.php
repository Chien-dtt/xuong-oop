<?php

namespace Chien\XuongOop\Controllers\Client;

use Chien\XuongOop\Commons\Controller;
use Chien\XuongOop\Commons\Helper;
use Chien\XuongOop\Models\Product;

class HomeController extends Controller
{
    private Product $product;

    public function __construct()
    {
        $this->product = new Product();
    }
    
    public function index() {
        $name = 'DucTV44';

        $products = $this->product->all();

        $this->renderViewClient('home', [
            'name' => $name,
            'products' => $products
        ]);
    }
}
