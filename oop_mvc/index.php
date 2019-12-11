<?php 
require_once "controllers/HomeController.php";
require_once "controllers/ProductController.php";

$url = $_GET['url'] ?? '/';



switch($url){
    case '/':
        $ctl = new HomeController();
        $ctl->index();
        break;
    case 'products':
        $ctl = new ProductController();
        $ctl->index();
        break;
    case 'products/create':
        include "views/products/create.php";
        break;
    default:
        echo "<h2>Oops 404 page not found!</h2>";die;
        break;
}