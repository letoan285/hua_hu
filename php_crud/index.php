<?php

require_once "db.php";

$sql = "SELECT * FROM products";
$stmt = $conn->prepare($sql);

$stmt->execute();

$products = $stmt->fetchAll();
// var_dump($products);die;
?>
<?php 
include_once "partials/header.php";
?>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-border">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th><a class="btn btn-sm btn-success" href="create.php">Add</a></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($products as $key => $products): ?>
                            <tr>
                                <td><?= $key + 1?></td>
                                <td><a href=""><img width="80" src="<?= $products['image'] ?>" alt=""></a> </td>
                                <td><?= $products['name'] ?></td>
                                <td><?= $products['sell_price'] ?></td>
                                <td>
                                    <a class="btn btn-sm btn-info" href="detail.php?id=<?= $products['id'] ?>">View</a>
                                    <a class="btn btn-sm btn-warning" href="edit.php?id=<?= $products['id'] ?>">Edit</a>
                                    <a class="btn btn-sm btn-danger" href="delete.php?id=<?= $products['id'] ?>">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
