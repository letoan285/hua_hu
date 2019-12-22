<?php 
require_once "app/models/Product.php";
// namespace App\Controller;

// use App\Model\Product;

class ProductController {

    public $model;
    public $base_path = 'http://www.localhost/hvcg/2019/Hua_Huu/oop_mvc/';


    public function __construct(){
        if(!$_SESSION['auth']){
            header("location: $this->base_path"."login");
        }
        $this->model = Product::all();
    }

    public function index(){
        $products = $this->model;
        $path = '../';
        $title = 'Product List';

        $view = 'app/views/admin/products/index.php';

        require_once "app/views/layouts/admin.php";
    }
    public function create(){
        $path = '../../';
        $title = 'Create Product';
        $view = 'app/views/admin/products/create.php';
        require_once "app/views/layouts/admin.php";
    }
    public function store(){
        $product = new Product();

        $product->name = $_POST['name'];
        $product->slug = $_POST['slug'];
        $product->description = $_POST['description'];
        $product->short_description = $_POST['short_description'];
        $product->sell_price = $_POST['sell_price'];
        $product->list_price = $_POST['list_price'];
        $product->category_id = $_POST['category_id'];
        $product->supplier_id = $_POST['supplier_id'];
        $product->stock = $_POST['stock'];
        $product->status = $_POST['status'];
        $product->image = $_POST['image'];
        // var_dump($product->name, $product->slug);die;

        $product->insert();
        header("location: $this->base_path"."admin/products");
    }
}