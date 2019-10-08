<?php
// echo "hello";
// $x = 0;
// if($x > 0){
//     echo 'x > 0';
// } else if($x <=0){
//     echo 'x <=0';
// } else {
//     echo 'x khong ton tai';


// }
// $my_name = 'toan';
// $your_name = $my_name;

// $your_name = 'Huu';

// echo $my_name;
// class Me {
//     public $name = 'toan';
// }

// $me = new Me();
// $you = $me;
// $you->name = 'huu';

// echo $me->name;

// 1. Stack

// 2. Heap

?>

<!-- <script>
    // let x = 1;
    // let y = x;
    // y =10;

    let x = {
        name: 'my name is x',
        value: 1
    }
    let y = x;
    y.value = 99;



    console.log(x);

</script> -->

<?php 
// Datatype 
// 1. primitive typ
// - string,
// - integer
// - float
// - boolean
// - null

// 2. reference
// - array
// - object
// - resource
// $str = 'this is my string';

// strlen

// echo strlen($str);
// echo str_word_count($str);
// echo strrev($str);
// echo strrev($str);
// $pass = '123456';
// $pass1 = '123456';
// echo md5($pass);
// echo "<br>";
// echo sha1($pass1);
// echo "<br>";
// $pass_hash =  password_hash($pass, true);

// echo password_verify('123456', $pass_hash);
// ucfirst, ucword, strtolower, strtoupper, explode
// $x = explode(' ', $str);

// var_dump($x);

// 1. toan tu toan hoc, 
// 2. toan tu so sanh
// 3. toan tu logic &&, ||, or ! 
// 4. +=, -=, = %=, Toan tu gan
// 5. ++, --- toan tu tang giam
// 6. toan tu dieu kien
$x = 4;
// if($x > 5) {
//     echo 'x > 5';
// } else {
//     echo 'x < 5';
// }
// echo $x > 5 ? 'x > 5' : 'x < 5';

// coalesce

// if($a = 1){
//     echo 'a toan tan';
//     $b = 5;
// }
// echo $b;


// $a = $b ?? $c ?? $d ?? 100;

// echo $a;

// Array
// 1. index array,
// 2. association array
// 3. multiple dimention array
// tupple
// $arr = [12,3,4,5,6, 'bay', 'tam', true, false, [3,4, [3,4,5, ['hsrhsr']]]];
// // echo $arr[9][1];

// $arr1 = ['name' => 'Toan', 'age' => 30, 3, 4, 5, 'address' => 'Hanoi', true, 'married' => 'yes'];
// // echo $arr1['name'];
// echo $arr1[3];

// $arr = [];

// for($i = 1; $i < 10; $i++){
//     $arr[] = $i;
// }
// $arr1 = [];
// // ---------- lay so le;
// for($i = 1; $i < 10; $i++){
//     if($i %2 != 0){
//         $arr1[] = $i;
//     }
// }

// var_dump($arr1);

// switch($a){
//     case 'mot':
//         break;
// }
// for, foreach, while, do while 

$arr = ['name' => 'huu', 'age' => '30'];
foreach($arr as $key => $value){
    echo "<p> $value </p>";
    // echo "<p> $key </p>";
}

// array_merge, array_pop, array_push, key, array_reverse, array_rand, md_rand

// echo "<br>";

// // $arr2 = [3, 9];

// echo mt_rand(1, 9);