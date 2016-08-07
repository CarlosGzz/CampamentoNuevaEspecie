<?php
	require "../MODEL/connect.php";
	$data = $db->query("SELECT nombre, apellidoPaterno, apellidoMaterno, correo, pagado FROM viviente WHERE pagado>0");
	$vivientes = array();
	while($object = mysqli_fetch_object($data)){
		$vivientes[]=$object;
	}
	$tableString = "<tbody>";
	foreach ($vivientes as $viviente) {
		$tableString.= "<tr>";
		$tableString.= "<td>".$viviente->nombre."</td>";
		$tableString.= "<td>".$viviente->apellidoPaterno." ".$viviente->apellidoMaterno."</td>";
		$tableString.= "<td>".$viviente->correo."</td>";
		$tableString.= "<td>".$viviente->gaia."</td>";
		$tableString.= "<td>".$viviente->pagado."</td>";
		$tableString.= "<td>";
	}
	$tableString.= "</tbody>";
	echo $tableString;
?>