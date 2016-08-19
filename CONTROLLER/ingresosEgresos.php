<?php
	require "../../../../MODEL/connect.php";
	$data = $db->query("SELECT i.fecha, i.idStaffViviente, s.nombre as sNombre, s.apellidoPaterno as sApellido, v.nombre as vNombre, v.apellidoPaterno as vApellido, i.metodoDePago, i.monto FROM ingreso as i INNER JOIN viviente as v ON i.idStaffViviente=v.idViviente INNER JOIN staff as s ON i.idStaffViviente=s.idStaff WHERE i.idCampamento = 1");
	$ingresos = array();
	while($object = mysqli_fetch_object($data)){
		$ingresos[]=$object;
	}

	$data = $db->query("SELECT e.fecha, a.area, e.nombrePersona, e.descripcion, e.monto FROM egreso as e INNER JOIN area as a ON e.idArea=a.idArea WHERE e.idCampamento = 1");
	$egresos = array();
	while($object = mysqli_fetch_object($data)){
		$egresos[]=$object;
	}
	$tableString2 = array();
	if(!empty($egresos)){
		foreach ($egresos as $egreso) {
			for($i = 0; $i<6; $i++){
				$tableString2[$i] .= "<td>".$egreso->nombre."</td>";
				$tableString2[$i] .= "<td>".$egreso->apellidoPaterno." ".$staf->apellidoMaterno."</td>";
				$tableString2[$i] .= "<td>".$egreso->nombreGaia."</td>";
				$tableString2[$i] .= "<td>".$egreso->rol."</td>";
				$tableString2[$i] .= "<td>".$egreso->pagado."</td>";
				$tableString2[$i] .= "</tr>";
			}
		}
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
			if(empty($egresos)){
				$tableString.= "<td></td>";
				$tableString.= "<td></td>";
				$tableString.= "<td></td>";
				$tableString.= "<td></td>";
				$tableString.= "<td></td>";
				$tableString.= "</tr>";
			}
		}
	}
	$tableString.= "</tbody>";
	echo $tableString;
?>