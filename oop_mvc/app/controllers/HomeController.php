<?php 
class HomeController {
    public function index(){
        include "app/views/home.php";
    }
    public function dashboard(){
        include "app/views/admin/dashboard.php";
    }
}