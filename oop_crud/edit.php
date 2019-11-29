<?php 
require_once "Product.php";
require_once "Category.php";
$id = $_GET['id'];

$product = Product::find($id);

$categories = Category::all();
// var_dump($categories);die;

?>

<?php 
include_once "partials/header.php";
?>



<div class="container">
        <div class="row">
            <div class="col-12">
            <h3 class="text-center">Create new Product</h3>
                <form action="save_product.php" method="POST">
                    <input type="hidden" name="id" value="<?=$product->id?>">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input name="name" type="text" value="<?=$product->name?>" class="form-control" placeholder="Name..">
                    </div>

                    <div class="form-group">
                        <label for="">Slug</label>
                        <input name="slug" type="text" value="<?=$product->slug?>" class="form-control" placeholder="Slug..">
                    </div>

                    <div class="form-group">
                        <label for="">Description</label>
                        <textarea name="description" class="form-control" cols="30" rows="10"> <?=$product->description?> </textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Short Description</label>
                        <textarea name="short_description" class="form-control" cols="30" rows="10"> <?=$product->short_description?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="">Sell Price</label>
                        <input name="sell_price" type="text" value="<?=$product->sell_price?>" class="form-control" placeholder="Sell Price..">
                    </div>

                    <div class="form-group">
                        <label for="">List Price</label>
                        <input name="list_price" type="text" value="<?=$product->list_price?>" class="form-control" placeholder="List Price..">
                    </div>

                    <div class="form-group">
                        <label for="">Category ID</label>
                        <select name="category_id" id="" class="form-control">
                            <?php foreach ($categories as $key => $category): ?>
                                <option 
                                <?php 
                                if($category->id == $product->category_id){
                                    echo 'selected';
                                }

                                ?>
                                value="<?=$category->id?>"> <?=$category->name?></option>
                            	
                            <?php endforeach ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Image</label>
                        <input name="image" value="<?=$product->image?>" type="text" class="form-control" placeholder="Image..">
                    </div>

                    <div class="form-group">
                        <label for="">Supplier ID</label>
                        <input name="supplier_id" type="text"  value="<?=$product->supplier_id?>" class="form-control" placeholder="Supplier ID..">
                    </div>

                    <div class="form-group">
                        <label for="">Stock</label>
                        <input name="stock" type="text" value="<?=$product->stock?>" class="form-control" placeholder="Supplier ID..">
                    </div>

                    <div class="form-group">
                        <button class="btn btn-success" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


<?php 
include_once "partials/footer.php";
?>