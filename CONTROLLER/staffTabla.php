<?php
	require "../../../MODEL/connect.php";
	$data = $db->query("SELECT staff.nombre, staff.apellidoPaterno, staff.apellidoMaterno, staff.genero, staff.fechaNacimiento, staff.carrera, staff.universidad, gaia.nombreGaia, staff.rolDeseado, staff.pulsera, staff.correo, staff.telefonoCel FROM staff INNER JOIN gaia ON staff.idGaia = gaia.idGaia");
	$staff = array();
	while($object = mysqli_fetch_object($data)){
		$staff[]=$object;
	}
	$tableString = "<tbody>";
	foreach ($staff as $staf) {
		$tableString.= "<tr>";
		$tableString.= "<td>".$staf->nombre."</td>";
		$tableString.= "<td>".$staf->apellidoPaterno." ".$staf->apellidoMaterno."</td>";
		$tableString.= "<td>".$staf->genero."</td>";
		$tableString.= "<td>";
		if(!empty($staf->fechaNacimiento) || $staf->fechaNacimiento != null){
			$birthDate = $staf->fechaNacimiento;
			$birthDate = explode("-", $staf->fechaNacimiento);
             //var_dump($birthDate);
			if($birthDate[0]<=2016){
				if($birthDate[1]==8){
					if($birthDate[2]>7){
						$age = 2016-$birthDate[0]-1;
					}else{
						$age = 2016-$birthDate[0];
					}
				}else{
					if($birthDate[1]>8){
						$age = 2016-$birthDate[0]-1;
					}else{
						$age = 2016-$birthDate[0];
					}
				}
			}
		}else{
			$age = 0;  
		}
		$tableString.= $age."</td>";
		$tableString.= "<td>".$staf->correo."</td>";
		$tableString.= "<td>".$staf->telefonoCel."</td>";
		$tableString.= "<td>".$staf->nombreGaia."</td>";
		$tableString.= "<td>".$staf->rolDeseado."</td>";
		$tableString.= "<td>".$staf->pulsera."</td>";
		$tableString.= "<td>".$staf->carrera."</td>";
		$tableString.= "<td>".$staf->universidad."</td>";

		$tableString.= "</tr>";
	}
	$tableString.= "</tbody>";
	echo $tableString;
?>