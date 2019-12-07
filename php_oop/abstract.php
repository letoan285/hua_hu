<?php 

abstract class ADog {
    public $age = 20;
    public function getName(){
        return 'Millu';
    }

    public function getAge(){
        return $this->age;
    }
    // abstract function getInfo();
}

class Dog extends ADog {
    public function getInfo(){}
    // abstract function getInfo();
}

$dog = new Dog();

echo $dog->getName();