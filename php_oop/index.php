<?php 

class Animal {
    public $name = 'DOGGY';
    protected $color = 'RED';
    // private $age = 90;

    public final function getName(){
        $name = 'Catty';
        return $name;
        return $this->name;
    }
    // public $weight = 20;
    // public $age = 90;
    // // const NAME = 'ANI';
    // public static function eat(){
    //     // return self::;
    //     // $model = new static();
    //     // 

    //     $model = new Animal();
    //     return $model->weight;
    // }


    // public function __construct(){
    //     $this->name = 'Tommy';
    //     // self::$age = 90;
    // }

    // public static function getName(){
    //     //$model = new static();
    //     return 'Hello';
    // }

    // public function __destruct(){

    // }
}

// $dog = new Animal();

// echo $dog::eat();

// echo Animal::eat();

// class Dog extends Animal {
//     public static $age = 100;
//     public static function getAge(){
//         return parent::$age;
//     }
// }

// // $dog = new Dog();

// echo Dog::getAge();

// $tom = new Animal();

// echo $tom->name;

// $tom->construct();


// echo Animal::getName();

// // echo Animal

// echo Animal::$age;

// echo $tom->name;

class Dog extends Animal {
    public function getName(){
        return 'gaewegag';
    }
}

$dog = new Dog();

echo $dog->getName();