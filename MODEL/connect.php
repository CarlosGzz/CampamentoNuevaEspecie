<?php
	$servername = "us-cdbr-iron-east-04.cleardb.net";
	$username = "be53035c41706e";
	$password = "9467bfd68022bd8";
	$dbname = "heroku_b09fc9ff7592b1e";
	/*$servername = "localhost";
	$username = "root";
	$password = "kobyjzt";
	$dbname = "LXM";*/

	// Create connection
	$db = new mysqli($servername, $username, $password, $dbname);
	$acentos = $db->query("SET NAMES 'utf8'");
	// Check connection
	if ($db->connect_error) {
		die("Connección fallida: Lo sentimos estamos teniendo problemas" . $db->connect_error);
	}


?>
