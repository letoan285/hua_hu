<?php 
require_once "app/controllers/HomeController.php";
require_once "app/controllers/ProductController.php";
require_once "app/controllers/UserController.php";

$url = $_GET['url'] ?? '/';



switch($url){
    case '/':
        $ctl = new HomeController();
        $ctl->index();
        break;
    case 'login':

            $method = $_SERVER['REQUEST_METHOD'];
            $ctl = new UserController();
            // var_dump($method);die;
            if($method == 'GET'){
                $ctl->getLogin();
                break;
            } else {
                // var_dump('post create');die;
                $ctl->postLogin();
                break;
            }


    case 'register':
        $method = $_SERVER['REQUEST_METHOD'];
        $ctl = new UserController();
        // var_dump($method);die;
        if($method == 'GET'){
            $ctl->getSingup();
            break;
        } else {
            // var_dump('post create');die;
            $ctl->postSignup();
            break;
        }

    case 'admin': 
        $ctl = new HomeController();
        $ctl->dashboard();
        break;
    case 'admin/products':
        $ctl = new ProductController();
        $ctl->index();
        break;
    // case 'admin/products/create':
        // $ctl = new ProductController();
        // $ctl->create();
        // break;
    case 'admin/products/create':
        $method = $_SERVER['REQUEST_METHOD'];
        $ctl = new ProductController();
        // var_dump($method);die;
        if($method == 'GET'){
            $ctl->create();
            break;
        } else {
            // var_dump('post create');die;
            $ctl->store();
            break;
        }
            
           
    default:
        echo "<h2>Oops 404 page not found!</h2>";die;
        break;
}