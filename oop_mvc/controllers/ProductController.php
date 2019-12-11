<?php 
require_once "models/Product.php";

class ProductController {

    public $model;

    public function __construct(){
        $this->model = Product::all();
    }

    public function index(){
        $products = $this->model;
        require_once "views/products/index.php";
    }
    public function create(){
        
    }
}