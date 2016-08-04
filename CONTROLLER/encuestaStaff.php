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
		$correo = trim($_POST["correo"]);
		$telefonoCel = trim($_POST["telefonoCel"]);
		$query = "INSERT INTO staff(nombre, apellidoPaterno, apellidoMaterno, genero, fechaNacimiento, idGaia, rolDeseado, correo, telefonoCel) 
                  VALUES ('$nombre', '$apellidoPaterno', '$apellidoMaterno', '$genero', '$fechaNacimiento', '$gaia', '$rolDeseado', '$correo', '$telefonoCel')";

        if(!empty($_POST["nombre"]) && !empty($_POST["apellidoPaterno"]) && !empty($_POST["apellidoMaterno"]) && !empty($_POST["fechaNacimiento"])&& !empty($_POST["gaia"])&& !empty($_POST["rolDeseado"])&& !empty($_POST["correo"])&& !empty($_POST["telefonoCel"])){
			if ($db->query($query) === TRUE) {
				echo "1";
			} else {
				echo "2";
			}
		}
	}

?>