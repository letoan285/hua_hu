<?php

require_once "app/models/BaseModel.php";
// namespace App\Model;

class User extends BaseModel {
    protected $table = 'users';
    protected $columns = [
        'name',
        'username',
        'email',
        'password',
        'avatar'
    ];
}
