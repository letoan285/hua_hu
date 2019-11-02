<?php
    $id = $_GET['id'];
    try {
        $conn = new PDO("mysql:host = 127.0.0.1; dbname=huu_database;charset=utf8", 'root', '');
    } catch (Exception $e) {
        var_dump($e->getMessage());die;
    }
    try {
        $sqlDelete = "DELETE FROM products WHERE id= $id";
        $stmtDE = $conn->prepare($sqlDelete);
        $stmtDE->execute();
        echo "Record was deleted successfully.";
        header('location: index.php');
        exit;
    } catch (Exception $e) {
        die("ERROR: Could not able to execute $sql. " 
                                    . $e->getMessage()); 
    }
    
?>