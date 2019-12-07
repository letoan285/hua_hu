
<?php 
include_once "views/partials/header.php";
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
                        <?php foreach ($products as $key=>$product): ?>
                            <tr>
                                <td><?= $key + 1?></td>
                                <td><a href=""><img width="80" src="<?= $product->image ?>" alt=""></a> </td>
                                <td><?= $product->name ?></td>
                                <td><?= $product->sell_price ?></td>
                                <td>
                                    <a class="btn btn-sm btn-info" href="edit.php?id=<?= $product->id ?>">Edit</a>
                                    <a class="btn btn-sm btn-primary" href="detail.php?id=<?= $product->id ?>">View</a>
                                    <a class="btn btn-sm btn-danger" href="delete.php?id=<?= $product->id ?>">Delete</a>
                                </td>
                                
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
