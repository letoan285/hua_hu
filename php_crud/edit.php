<?php

require_once "db.php";

//1. lay ra thong tin san pham
$id = $_GET["id"];
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

var_dump($category_id);

$sql = "SELECT * FROM products where id = $id";
$stmt = $conn->prepare($sql);

$stmt->execute();

$products = $stmt->fetchAll();
$sql2 = "SELECT * FROM categories inner join products on categories.id = products.category_id where products.category_id = $id";
$stmt2 = $conn->prepare($sql2);

$stmt2->execute();

$categories = $stmt2->fetchAll();
var_dump($categories);
?>
//2. hien thi tren form de sua
<?php 
include_once "partials/header.php";
?>
<?php foreach ($products as $key => $products): ?>
<div class="container">
        <div class="row">
            <div class="col-12">
            <h3 class="text-center">Create new Product</h3>
                <form action="update.php" method="POST">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input name="name" type="text" class="form-control" value="<?= $products['name'] ?>">
                    </div>

                    <div class="form-group">
                        <label for="">Slug</label>
                        <input name="slug" type="text" class="form-control" value="<?= $products['slug'] ?>">
                    </div>

                    <div class="form-group">
                        <label for="">Description</label>
                        <textarea name="description" class="form-control" cols="30" rows="10"><?= $products['description']?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Short Description</label>
                        <textarea name="short_description" class="form-control" cols="30" rows="10"><?= $products['short_description']?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="">Sell Price</label>
                        <input name="sell_price" type="text" class="form-control" value="<?= $products['sell_price'] ?>">
                    </div>

                    <div class="form-group">
                        <label for="">List Price</label>
                        <input name="list_price" type="text" class="form-control" value="<?= $products['list_price'] ?>">
                    </div>

                    <?php foreach ($categories as $key => $categories): ?>
                    
                    <div class="form-group">
                        <label for="">Category ID</label>
                        <select name="category_id" id="" class="form-control">
                            <option value="<?= $categories['name']?>" <?php if ($products['category_id'] == $categories['id']){
                                echo 'selected';
                            } ?>>Category 1</option>
                            <option value="<?= $categories['name']?>" <?php if ($products['category_id'] == $categories['id']){
                                echo 'selected';
                            } ?>>Category 2</option>
                        </select>
                    </div>

                    <?php endforeach ?>

                    <div class="form-group">
                        <label for="">Image</label>
                        <input name="image" type="text" class="form-control" value="<?= $products['image'] ?>">
                    </div>

                    <div class="form-group">
                        <label for="">Supplier ID</label>
                        <input name="supplier_id" type="text" class="form-control" value="<?= $products['supplier_id'] ?>">
                    </div>

                    <div class="form-group">
                        <label for="">Stock</label>
                        <input name="stock" type="text" class="form-control" value="<?= $products['stock'] ?>">
                    </div>

                    <div class="form-group">
                        <button class="btn btn-success" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach ?>
<?php 
include_once "partials/footer.php";
?>
// gui den trang update.php

// redirect ve trang list
<?php 
    // header("location: index.php");
 ?>