<?php
	/*$servername = "us-cdbr-iron-east-03.cleardb.net";
	$username = "b6450cfb82ab99";
	$password = "85853dd0";
	$dbname = "heroku_a98a40c69d50d5a";*/
	$servername = "localhost";
	$username = "root";
	$password = "kobyjzt";
	$dbname = "LXM";

	// Create connection
	$db = new mysqli($servername, $username, $password, $dbname);
	$acentos = $db->query("SET NAMES 'utf8'");
	// Check connection
	if ($db->connect_error) {
		die("Connección fallida: Lo sentimos estamos teniendo problemas" . $db->connect_error);
	}


?>