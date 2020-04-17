<?php
try {
    $conn = new PDO("mysql:host=localhost;dbname=db_crud","root","");
    // echo "wow";
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>