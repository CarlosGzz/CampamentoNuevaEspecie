<?php
	require "../../../../MODEL/connect.php";
	$data = $db->query("SELECT staff.nombre, staff.apellidoPaterno, staff.apellidoMaterno, gaia.nombreGaia, staff.correo, staff.telefonoCel, sc.pagado, sc.rol, sc.vehiculo FROM staff INNER JOIN gaia  ON staff.idGaia = gaia.idGaia INNER JOIN staffCampamento as sc ON staff.idStaff=sc.idStaff");
	$staffAsistentes = array();
	while($object = mysqli_fetch_object($data)){
		$staffAsistentes[]=$object;
	}
	$tableString="<tbody>";
	if(!empty($staffAsistentes)){
		foreach ($staffAsistentes as $staffAsistente) {
			$tableString.= "<tr>";
			$tableString.= "<td>".$staffAsistente->nombre."</td>";
			$tableString.= "<td>".$staffAsistente->apellidoPaterno." ".$staf->apellidoMaterno."</td>";
			$tableString.= "<td>".$staffAsistente->nombreGaia."</td>";
			$tableString.= "<td>".$staffAsistente->rol."</td>";
			$tableString.= "<td>".$staffAsistente->pagado."</td>";
			$tableString.= "<td>".$staffAsistente->vehiculo."</td>";
			$tableString.= "<td>".$staffAsistente->correo."</td>";
			$tableString.= "<td>".$staffAsistente->telefonoCel."</td>";

			$tableString.= "</tr>";
		}
		$tableString.= "</tbody>";
	}
	echo $tableString;
?>