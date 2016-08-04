<?php
	include "../MODEL/connect.php";
	if(!empty($_POST)){
		$nombre = trim($_POST["nombre"]);
		$apellidoPaterno = trim($_POST["apellidoPaterno"]);
		$apellidoMaterno = trim($_POST["apellidoMaterno"]);
		$genero = trim($_POST["genero"]);
		$fechaNacimiento = trim($_POST["fechaNacimiento"]);
		$gaia = trim($_POST["gaia"]);
		$rolDeseado = trim($_POST["rolDeseado"]);
		$pulsera = trim($_POST["pulsera"]);
		$correo = trim($_POST["correo"]);
		$telefonoCel = trim($_POST["telefonoCel"]);
		echo $pulsera;

		$query = "INSERT INTO staff(nombre, apellidoPaterno, apellidoMaterno, genero, fechaNacimiento, idGaia, rolDeseado, pulsera, correo, telefonoCel) 
                  VALUES ('$nombre', '$apellidoPaterno', '$apellidoMaterno', '$genero', '$fechaNacimiento', '$gaia', '$rolDeseado','$pulsera', '$correo', '$telefonoCel')";

        if(!empty($_POST["nombre"]) && !empty($_POST["apellidoPaterno"]) && !empty($_POST["apellidoMaterno"]) && !empty($_POST["fechaNacimiento"]) && !empty($_POST["gaia"]) && !empty($_POST["rolDeseado"]) && !empty($_POST["pulsera"]) && !empty($_POST["correo"]) && !empty($_POST["telefonoCel"])){
			if ($db->query($query) === TRUE) {
				echo "1";
			} else {
				echo "2";
			}
		}
	}

?>