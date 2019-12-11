<?php 
// 1. ket noi voi co so du lieu
require_once "db.php";

// 2. Thu thap thong tin tu form
$name = $_POST["name"];
$list_price = $_POST["list_price"];
$description = $_POST["description"];
$short_description = $_POST["short_description"];
$sell_price = $_POST["sell_price"];
$category_id = $_POST["category_id"];
$stock = $_POST["stock"];
$image = $_POST["image"];
$slug = $_POST["slug"];
$supplier_id = $_POST["supplier_id"];

// var_dump($name, $list_price,$description,$short_description,$category_id, $image, $stock, $supplier_id, $slug);die;

// 3. viet sql
// $sql = "INSERT INTO products(name, slug, description, short_description, list_price, sell_price, image, category_id, stock, supplier_id) VALUES($name, $slug, $description, $short_description, $list_price, $sell_price, $image, $category_id, $stock, $supplier_id)";
$sql = "insert into products(name, sell_price, list_price, slug, image, category_id, description, short_description, supplier_id, stock) values('$name', $sell_price, $list_price, '$slug', '$image', $category_id, '$description', '$short_description', $supplier_id, $stock)";
$stmt = $conn->prepare($sql);


// var_dump($sql);die;


// $stmt->bindValue(":name", $name);
// $stmt->bindValue(":list_price", $list_price);
// $stmt->bindValue(":description", "$description");
// $stmt->bindValue(":short_description", "$short_description");
// $stmt->bindValue(":sell_price", $sell_price);
// $stmt->bindValue(":category_id", $category_id);
// $stmt->bindValue(":image", $image);
// $stmt->bindValue(":slug", $slug);
// $stmt->bindValue(":supplier_id", $supplier_id);

$stmt->execute();
// var_dump($sql);die;
// 4. execute

// 6. chuyen huong ve trang khac (list);

header("location: index.php");

// var_dump($name, $sell_price);die;
// echo "Hello";