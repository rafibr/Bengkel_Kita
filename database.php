<?php
try{
$pdo_conn = new PDO('mysql:host=localhost;dbname=bengkeltes',"root","");
}catch (PDOException $e){
    die($e-> getMessage());
    exit();
}
?>