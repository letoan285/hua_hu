<?php 
// namespace App\Controller;

class HomeController {
    public $base_path = 'http://www.localhost/hvcg/2019/Hua_Huu/oop_mvc/';
    public function __construct(){
        if(!$_SESSION['auth']){
            header("location: $this->base_path"."login");
        }
    }
    public function index(){
        // var_dump($_SESSION['auth']);die;
        include "app/views/home.php";
    }
    public function dashboard(){
        $path = '';
        include "app/views/admin/dashboard.php";
        
    }
}