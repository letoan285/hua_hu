<?php 

class Animal {
    // public $name = 'DOGGY';
    // protected $color = 'RED';
    // private $age = 90;

    // public function getName(){
    //     $name = 'Catty';
    //     return $name;
    //     return $this->name;
    // }
    public $w = 10;
    public function eat($x){
        return $x;
    }
}

// $dog = new Animal();
// echo $dog->getName();
// // echo $dog->age;

// echo $dog->color;

// 4 tinh chat huong
// tinh truu tuong,(abstraction) tinh ke thua(inheritance), tinh da hinh(polymophism), tinh dong goi(encapsulation)

// 1. tinh ke thua.

class Dog extends Animal {
    public function eat($x){
        $this->w = $x;
    }
}


class Cat extends Animal {
    public function eat($x){
        $this->w = $x*2;
    }
}

$cat = new Cat();

$cat->eat(9);


$dog = new Dog();

$dog->eat(9);

echo $dog->w;
echo "<br>";

echo $cat->w;