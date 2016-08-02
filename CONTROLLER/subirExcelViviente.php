<?php
	include ("../MODEL/connect.php");
	include ("PHPExcel/IOFactory.php");
	header("Content-Type: text/html;charset=utf-8");
	if(isset($_POST["submit"])){
		$file = $_FILES['file']['tmp_name'];
		$handle = fopen($file, "r");
		$contador = 0;
		$connect = mysqli_connect("localhost", "root", "kobyjzt", "lxm");    
	 	$html="<table border='1'>";  
	 	$objPHPExcel = PHPExcel_IOFactory::load($file);  
	 	foreach ($objPHPExcel->getWorksheetIterator() as $worksheet){  
	      	$highestRow = $worksheet->getHighestRow();  
	      	for ($row=1; $row<=$highestRow; $row++){  
	           	$html.="<tr>";  
	           	$sexo = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(0, $row)->getValue());  
	           	$nombre = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(1, $row)->getValue());
	           	$apellidoPaterno = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(2, $row)->getValue());
	           	$apellidoMaterno = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(3, $row)->getValue());
	           	$unixDate = (mysqli_real_escape_string($connect,$worksheet->getCellByColumnAndRow(4, $row)->getValue()) - 25569) * 86400;
	           	$UNIX_DATE = ($worksheet->getCellByColumnAndRow(4, $row)->getValue() - 25569) * 86400;
	           	$fechaNacimiento = gmdate("Y-m-d", $UNIX_DATE);
	           	$telefonoCasa = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(5, $row)->getValue());
	           	$telefonoCel = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(6, $row)->getValue());
	           	$correo = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(7, $row)->getValue());
	           	$sql = "INSERT INTO viviente (sexo, nombre, apellidoPaterno, apellidoMaterno, fechaNacimiento, telefonoCasa, telefonoCel, correo, pagado, cartaSeguro, cartaDeslinde, observaciones) VALUES ('$sexo','$nombre','$apellidoPaterno', '$apellidoMaterno', '$fechaNacimiento', '$telefonoCasa', '$telefonoCel', '$correo','0','0','0','')";  
	           	//mysqli_query($connect, $sql);
	           	if ($db->query($sql) === TRUE) {
					echo "'Nuevo Viviente Creado Correctamente'";
					$contador++;
				}else {
					echo "'Error:  ". $sql . "<br>" . $db->error."'";
				}
	           	$html.= '<td>'.$sexo.'</td>';  
	           	$html .= '<td>'.$nombre.'</td>';
	           	$html.= '<td>'.$apellidoPaterno.'</td>';  
	           	$html .= '<td>'.$apellidoMaterno.'</td>';
	           	$html.= '<td>'.$fechaNacimiento.'</td>';  
	           	$html .= '<td>'.$telefonoCasa.'</td>';
	           	$html.= '<td>'.$telefonoCel.'</td>';  
	           	$html .= '<td>'.$correo.'</td>'; 
	           	$html .= "</tr>";
	       }
	    }
	    $html .= '</table>';  
	    //echo $html;  
	 	echo '<script>alert("'.$contador.'Vivientes creados exitosamente")</script>';
	 	$_POST = array();
	 	unset($_POST);
	 	header("Location: ../VIEW/DASHBOARD/");
	}else{
		header("Location: ../VIEW/DASHBOARD/VIVIENTES/index.php");
	} 
?>