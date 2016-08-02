<?php
	include ("../MODEL/connect.php");
	include ("PHPExcel/IOFactory.php");
	header("Content-Type: text/html;charset=utf-8");
	if(isset($_POST["submit"])){
		if(!empty($_POST['nombre'])){
			$nombre = trim($_POST["nombre"]);
			$apellidoPaterno = trim($_POST["apellidoPaterno"]);
			$apellidoMaterno = trim($_POST["apellidoMaterno"]);
			$correo = trim($_POST["correo"]);
			$genero = trim($_POST["genero"]);
			$observaciones = trim($_POST["observaciones"]);
			$sql = "INSERT INTO viviente (sexo, nombre, apellidoPaterno, apellidoMaterno,correo, observaciones)
					VALUES ('$genero', '$nombre', '$apellidoPaterno', '$apellidoMaterno', '$correo', '$observaciones')";
			if ($db->query($sql) === TRUE) {
				echo "<script> alert('Nuevo Viviente Creado Correctamente')</script>";
			} else {
				"<script>alert('Error:  ". $sql . "<br>" . $db->error."')</script>";
			}  
		}
		$db->close();
	 	echo '<script>alert("'.$contador.'Vivientes creados exitosamente")</script>';
	 	$_POST = array();
	 	unset($_POST);
	 	header("Location: ../VIEW/DASHBOARD/VIVIENTES/index.php");
	}else{
		header("Location: ../VIEW/DASHBOARD/VIVIENTES/index.php");
	} 
?>