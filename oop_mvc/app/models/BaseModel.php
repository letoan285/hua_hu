<?php
class BaseModel {
    protected $host = '127.0.0.1';
    protected $userName = 'root';
    protected $pass = '';
    protected $dbName = 'huu_database';
    protected $charset = 'utf-8';
    protected $conn = null;
    protected $sql = '';

    public function __construct(){
        $this->conn = new PDO("mysql:host=$this->host; dbname=$this->dbName", $this->userName, $this->pass);
    }

    public static function all(){
        $model = new static();
        $model->sql = "SELECT * FROM $model->table";
        $stmt = $model->conn->prepare($model->sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS, get_class($model));
        return $result;
    }
    public static function find($id){
        $model = new static();
        $model->sql = "SELECT * FROM $model->table WHERE id = $id";
        $stmt = $model->conn->prepare($model->sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS, get_class($model));
        if(count($result) > 0){
            return $result[0];
        }
        return null;
        // return $result;
        // var_dump($result);die;
    }
    public static function where($arr = []){
        $model = new static();
        $model->sql = "SELECT * FROM $model->table WHERE ";
        if(count($arr) == 2){
            $model->sql .= "$arr[0] = '$arr[1]'";
        } else if(count($arr) == 3){
            $model->sql .= "$arr[0] $arr[1] '$arr[2]'";
        }
        // var_dump($model->sql);die;
        return $model;
    }
    public function andwhere($arr = []){
        $this->sql .= " and ";
        if(count($arr) == 2){
            $this->sql .= "$arr[0] = '$arr[1]'";
        } else if(count($arr) == 3){
            $this->sql .= "$arr[0] $arr[1] '$arr[2]'";
        }
        return $this;
    }

    public function orwhere($arr = []){
        $this->sql .= " or ";
        if(count($arr) == 2){
            $this->sql .= "$arr[0] = '$arr[1]'";
        } else if(count($arr) == 3){
            $this->sql .= "$arr[0] $arr[1] '$arr[2]'";
        }
        return $this;
    }

    public function get(){
        $stmt = $this->conn->prepare($this->sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS, get_class($this));
        return $result;
    }
    public function delete(){
        $this->sql = "DELETE FROM $this->table WHERE id = $this->id";
        $stmt = $this->conn->prepare($this->sql);
        try {
            $stmt->execute();
            return true;
        } catch(Exception $e){
            var_dump($e->getMessage());die;
        }
    }

    public function update(){
        $this->sql = "UPDATE $this->table SET ";
        foreach($this->columns as $col){
            if($this->{$col} != null){
                $this->sql .= " $col = '". $this->{$col}. "', " ;
            }
        }
        $this->sql = rtrim($this->sql, ", ");

        $this->sql .= " WHERE id = $this->id";

        $stmt = $this->conn->prepare($this->sql);
        
        try {
            $stmt->execute();
            return $this;
        } catch(Exception $e){
            var_dump($e->getMessage());die;
        }
       
    }
    public function insert(){
        $this->sql = "INSERT INTO $this->table (";
        foreach($this->columns as $col){
            if($this->{$col} != null){
                // $this->sql .= " $col = '". $this->{$col}. "', " ;
                $this->sql .= "$col, ";
            }
        }
        $this->sql = rtrim($this->sql, ", ");
        $this->sql .= ") VALUES (";
        foreach($this->columns as $col){
            if($this->{$col} != null){
                // $this->sql .= " $col = '". $this->{$col}. "', " ;
                $this->sql .= "'".$this->{$col}. "', ";
            }
        }
        $this->sql = rtrim($this->sql, ", ");
        $this->sql .= ")";

        $stmt = $this->conn->prepare($this->sql);

        try {
            $stmt->execute();
            return $this;
        } catch(Exception $e){
            var_dump($e->getMessage());die;
        }
        // var_dump($this->sql);die;
    }

}