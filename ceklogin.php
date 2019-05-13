<?php

require_once ("database.php");
session_start();

$username=$_POST['email'];
$password=$_POST['password'];

$kueri = "SELECT * FROM customer WHERE EMAIL = '".$username."' AND PASSWORD = '".$password."'";
$statement = $pdo_conn->prepare("$kueri"); 
$statement->execute();
$user = $statement->fetch();

if($user){	
$_SESSION["active"] = $user['EMAIL'];
$_SESSION["fullname"] = $user['NAMA'];

	
	header ("Location:index.php");
}else{
	echo "<script>
	alert('Username atau password salah!');
	window.location.href='login.html';
	</script>";
}