<?php

require_once ("database.php");

if($_POST['confirm_password'] == $_POST['password']){
$username=$_POST['nama'];
$password=$_POST['password'];
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];

$query = "SELECT EMAIL FROM customer WHERE EMAIL='".$email."'";
$stmt = $pdo_conn->prepare("$query");
$stmt->execute();
$regis = $stmt->fetch();

if($regis["email"] == $email){
	header("location:cekregis2.php?statusdaftar=gagal");
	
}else{


$kueri = "INSERT INTO customer (NAMA, PASSWORD, EMAIL, NO_HP) VALUES (:NAMA, :PASSWORD, :EMAIL, :NO_HP)";
$statement = $pdo_conn->prepare("$kueri");   
$statement-> bindParam(':NAMA',$username);
$statement-> bindParam(':PASSWORD',$password);
$statement-> bindParam(':EMAIL',$email);
$statement-> bindParam(':NO_HP',$no_hp);
$statement->execute();
header ("Location:login.html");
}
 
}else{
 header("location:../signup.php?status=salah");

}