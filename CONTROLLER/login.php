<?php
	include("../MODEL/conexion.php");
	$salt = '$1$somethin$';
	$user =$_POST['user'];
	$pass =crypt($_POST['pass'],$salt);
	$db = new conexion;
	
	$db->login($user, $pass);
	$db->cerrar();


?>