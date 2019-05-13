<?php

require_once ("database.php");
session_start();

$username=$_POST['email'];
$password=$_POST['password'];

$kueri = "SELECT * FROM bengkel WHERE USERNAME_BENGKEL = '".$username."' AND PASSWORD = '".$password."'";
$statement = $pdo_conn->prepare("$kueri"); 
$statement->execute();
$user = $statement->fetch();

if($user){	
$_SESSION["id"] = $user['ID_BENGKEL'];
$_SESSION["active"] = $user['NAMA_BENGKEL'];

	
	header ("Location:profilbengkel.php");
}else{
	echo "<script>
	alert('Username atau password salah!');
	window.location.href='loginbengkel.html';
	</script>";
}