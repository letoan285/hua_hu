<?php
require_once "app/models/BaseModel.php";
// namespace App\Model;

class Product extends BaseModel {
    protected $table = 'products';
    protected $columns = [
        'name',
        'description',
        'short_description',
        'slug',
        'image',
        'sell_price',
        'list_price',
        'category_id',
        'stock',
        'status',
        'supplier_id'
    ];
}
