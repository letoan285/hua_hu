<?php 
require_once "header.php";
session_start();
?>
    <!-- <h3>Danh sach san pham</h3>
    <a class="btn btn-success" href="">Them moi</a> -->

<?php 
    // $camelCase = 'abc xe';
    // $PasCal = 'gaege';
    // $snake_case = 'gagegeg';
    $name = 'toan';

    function getName($name = 'Toan'){
        // global $name;
        echo $name;
    }
    // function getName2($name = 'Toan'){
    //     // global $name;
    //     echo $name;
    // }
    // function getName2($name = 'Toan'){
    //     // global $name;
    //     echo $name;
    // }

    // getName('Huu');

    // const NAME = 'HUU';
    // define('MY_NAME', 'LE VAN TOAN');
    
    // echo MY_NAME;

    // $GLOBALS;
    // $_SERVER;
    // $_REQUEST;
    // $_FILES;
    // $_SESSION;
    // $_COOKIE;
    // $_POST;
    // $_GET;
    // $_ENV;
    // $x = 2;
    // $y = 3;
    // function getResult(){
    //     $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
    //     echo $GLOBALS['z'];
    // }
    // getResult();
    // echo $z;
    // $name = $_POST['name'] ?? '';
    // $age = $_POST['age'] ?? '';
    // $avatar = $_FILES['avatar'] ?? '';
    // // echo $name;
    // // echo $age;
    // var_dump($avatar);die;
    // $_SESSION['myname'] = 'le van toan';
    // session_unset();
    // session_destroy();

    // setCookie('your_name', 'HUA HUU', time() + 3600);

        // $server = $_SERVER['PHP_SELF'];
        // $server = $_SERVER['SERVER_NAME'];
        // $server = $_SERVER['HTTP_HOST'];
        // $server = $_SERVER['SCRIPT_NAME'];
        // $server = $_SERVER['SERVER_ADDR'];
        // $server = $_SERVER['REQUEST_METHOD'];
        // $server = $_SERVER['SERVER_PROTOCOL'];
        // $server = $_SERVER['SERVER_SOFTWARE'];
        // $server = $_SERVER['SERVER_PORT'];

        // echo $server;

        // $arr = [3,5,7,22,4,112,678,99, 88];
        // $max = $arr[0];
        // for($i = 0; $i < count($arr); $i++){
        //     if($arr[$i] > $max){
        //         $max = $arr[$i];
        //     }
        // }

        // echo $max;



?>

<!-- <form action="" method="POST" enctype="multipart/form-data">
    <input type="text" name="name" placeholder="name"><br>
    <input type="text" name="age" placeholder="Age"><br>
    <input type="file" name="avatar"><br>
    <button type="submit" class="btn btn-success">Submit</button>
</form> -->

<a href="login.php">Login</a>

<?php 
require_once "footer.php";

?>