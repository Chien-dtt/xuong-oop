<?php 

namespace Chien\XuongOop\Controllers\Client;

use Chien\XuongOop\Commons\Controller;
// use Chien\XuongOop\Models\Product;
use Chien\XuongOop\Models\Category;

class CategoryController extends Controller
{
    private Category $category;

    public function __construct()
    {
        $this->category = new Category();
    }
    
    public function index() {
        echo __CLASS__ . '@' . __FUNCTION__;
    }

    public function detail($id) {
        $category = $this->category->findByID($id);

        $this->renderViewClient('product-detail', [
            'category' => $category
        ]);
    }
}