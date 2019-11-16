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

    public function all(){
        $this->sql = "SELECT * FROM $this->table";
        $stmt = $this->conn->prepare($this->sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS, get_class($this));
        return $result;
    }

}
