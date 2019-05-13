<?php

require_once ("database.php");

$id=$_GET['id'];


$kueri = "DELETE FROM antrian WHERE ID_ANTRIAN = ".$id;
$statement = $pdo_conn->prepare("$kueri");   
$statement->execute();

	header ("Location:daftarantrian.php");