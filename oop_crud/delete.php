<?php 
require_once "Product.php";
$id = $_GET['id'];

$product = Product::find($id);
$product->delete();

header('location: index.php');

// var_dump($product);die;