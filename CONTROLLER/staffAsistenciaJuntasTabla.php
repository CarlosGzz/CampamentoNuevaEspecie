<?php
	require "../../../../MODEL/connect.php";
	$data = $db->query("SELECT s.idStaff, s.nombre, s.apellidoPaterno, s.apellidoMaterno, j.idJunta ,sj.asistencia FROM staff as s left JOIN staffJunta as sj ON s.idStaff = sj.idStaff LEFT JOIN junta as j ON sj.idJunta = j.idJunta ORDER BY s.idStaff");
	$staffAsistentes = array();
	while($object = mysqli_fetch_object($data)){
		$staffAsistentes[]=$object;
	}
	$data = $db->query("SELECT * FROM junta");
	$juntas = array();
	while($object = mysqli_fetch_object($data)){
		$juntas[]=$object;
	}

	$tableString="<thead>";
	$tableString.="<tr>";
	$tableString.="<th>Nombre Completo</th>";
	foreach ($juntas as $junta) {
		$tableString.="<th>".$junta->nombre." ".$junta->fecha."</th>";
	}
	$tableString.="</tr>";
	$tableString.="</thead>";
	$tableString.="<tbody>";
	$tableString.= "<tr>";
	$contadorJuntas = 0;
	if(!empty($staffAsistentes)){
		$idStaff1= 0;
		foreach ($staffAsistentes as $staffAsistente) {

			if($contadorJuntas == 0){
				$tableString.= "<td>".$staffAsistente->nombre." ".$staffAsistente->apellidoPaterno." ".$staffAsistente->apellidoMaterno."</td>";
				if($staffAsistente->asistencia == 0){
					$tableString.= "<td>  </td>";
				}else{
					if($staffAsistente->asistencia == 1){
						$tableString.= "<td> Asistio </td>";
					}
				}
				$contadorJuntas++;
			}else{
				if($contadorJuntas < count($juntas)){
					if($staffAsistente->asistencia == 0){
						$tableString.= "<td>  </td>";
					}else{
						if($staffAsistente->asistencia == 1){
							$tableString.= "<td> Asistio </td>";
						}
					}
					$contadorJuntas++;
				}else{
					$tableString.= "</tr>";
					$contadorJuntas = 0;
				}
			}

		}
		$tableString.= "</tbody>";
	}
	echo $tableString;
?>