<?php
	include("../MODEL/conexion.php");
	$salt = '$1$campne1615$';
	$user =$_POST['user'];
	$pass =crypt($_POST['pass'],$salt);
	$db = new conexion;
	
	$db->login($user, $pass);
	$db->cerrar();


?>