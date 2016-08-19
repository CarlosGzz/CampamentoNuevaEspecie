<?php
	require "../../../MODEL/connect.php";
	$data = $db->query("SELECT i.fecha, i.idStaffViviente, s.nombre as sNombre, s.apellidoPaterno as sApellido, v.nombre as vNombre, v.apellidoPaterno as vApellido, i.metodoDePago, i.monto FROM ingreso as i INNER JOIN viviente as v ON i.idStaffViviente=v.idViviente INNER JOIN staff as s ON i.idStaffViviente=s.idStaff WHERE i.idCampamento = 1");
	$ingresos = array();
	while($object = mysqli_fetch_object($data)){
		$ingresos[]=$object;
	}

	$tableString="<tbody>";
	if(!empty($ingresos)){
		foreach ($ingresos as $ingreso) {
			$tableString.= "<tr>";
			$tableString.= "<td>".$ingreso->fecha."</td>";
			if($ingreso->idStaffViviente < 1000){
				$tableString.= "<td style='background-color= #FFF000;'>Staff</td>";
					$tableString.= "<td style='background-color= #FFF000;'>".$ingreso->sNombre." ".$ingreso->sApellido."</td>";
			}else{
				if($ingresos->idStaffViviente > 1000){
					if($ingresos->idStaffViviente == 9999){
						$tableString.= "<td style='background-color= #000FFF;'>Caja Chica</td>";
						$tableString.= "<td style='background-color= #000FFF;'>".$ingreso->comentarios."</td>";
					}else{
						$tableString.= "<td style='background-color= #000FFF;'>Viviente</td>";
						$tableString.= "<td style='background-color= #000FFF;'>".$ingreso->vNombre." ".$ingreso->vApellido."</td>";
					}
				}
			}
			$tableString.= "<td>".$ingreso->metodoDePago."</td>";
			$tableString.= "<td>".$ingreso->monto."</td>";
			$tableString.= "</tr>";
		}
	}
	$tableString.= "</tbody>";
	echo $tableString;
?>