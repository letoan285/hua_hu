<?php 
// namespace App\Controller;
require_once "app/models/User.php";
session_start();
class UserController {

    public $model;
    public $base_path = 'http://www.localhost/hvcg/2019/Hua_Huu/oop_mvc/';

    public function __construct(){
        // if(!$_SESSION['auth']){
        //     // header("location: $this->base_path"."login");
        // }
    }
    public function logout(){
        unset($_SESSION['auth']);

        header("location: $this->base_path"."login");
    }
    public function getLogin(){
        // var_dump('login');die;
        include_once "app/views/auth/login.php";
    }
    public function postLogin(){
        $email = $_POST['email'];
        $password = $_POST['password'];


        $rs = User::where(['email', "$email"])->get();

        if(count($rs) < 1){
            header("location: $this->base_path"."login");
        } else {

            if(password_verify($password, $rs[0]->password)){
                
                $_SESSION['auth']['email'] = $rs[0]->email;
                $_SESSION['auth']['password'] = $rs[0]->password;
                // var_dump($_SESSION['auth']);die;
                header("location: $this->base_path"."admin");
            } else {
                header("location: $this->base_path"."login");
            }
        
        }
        
    }

    public function getSingup(){
        include_once "app/views/auth/register.php";
    }
    public function postSignup(){
        // include_once "app/views/auth/register.php";
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password_confirm = $_POST['password_confirm'];
        if($password!=$password_confirm){
            header("location: $this->base_path"."register");
        }

        $email_uniq = User::where(['email', $email])->get();
        if(count($email_uniq) > 0){
            $msg = 'Email da ton tai';
            header("location: $this->base_path"."register");

        } else {
            $user = new User();
            $user->name = $name;
            $user->email = $email;
            $user->avatar = 'noavatar.png';
            $user->password = password_hash($password, PASSWORD_DEFAULT);
            $user->insert();
            header("location: $this->base_path"."login");

        }
        // var_dump($name, $email, $password, $password_confirm);die;
    }
}

?>