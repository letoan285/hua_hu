<?php 
require_once "Product.php";
$id = $_POST['id'];

$product = Product::find($id);

$product->name = $_POST['name'];
$product->slug = $_POST['slug'];
$product->description = $_POST['description'];
$product->sell_price = $_POST['sell_price'];
$product->list_price = $_POST['list_price'];
$product->category_id = $_POST['category_id'];
$product->image = $_POST['image'];

$product->update();

var_dump($id);die;