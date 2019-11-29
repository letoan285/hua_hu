<?php
interface DogInterface {
    function getName();
    const NAME = 'MILLY';
}
interface Dog2Interface extends DogInterface {
    function getName2($x);
    // const NAME = 'MILLY';
}

class Dog implements DogInterface {
    public function getName(){
        return 'dog name';
        $animal->name;
    }
    public function getName2($y){}
}

// 1. interface chi chua phuong thuc, ko chua thuoc tinh
// 2.interface co the chua constant
// 3. ko co private vaf protected access modifier
// 4. interface extends 1 hoac nhieu interface khac
// 5. khong the khoi tao doi tuong

// DI // Dependency Injection

