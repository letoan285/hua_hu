<?php 
require_once "Product.php";

$product = new Product();

$product->name = $_POST['name'];
$product->slug = $_POST['slug'];
$product->description = $_POST['description'];
$product->short_description = $_POST['short_description'];
$product->sell_price = $_POST['sell_price'];
$product->list_price = $_POST['list_price'];
$product->category_id = $_POST['category_id'];
$product->supplier_id = $_POST['supplier_id'];
$product->stock = $_POST['stock'];
$product->status = $_POST['status'];
$product->image = $_POST['image'];
// var_dump($product->name, $product->slug);die;

$product->insert();

header("location: index.php");
