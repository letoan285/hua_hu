<?php 
try {
    $conn = new PDO("mysql:host=127.0.0.1; dbname=huu_database;charset=utf8", 'root', '');
} catch (Exception $e) {
    var_dump($e->getMessage());die;
}