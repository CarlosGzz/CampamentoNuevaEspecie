<?php
	require "MODEL/connect.php";
	$data = $db->query("SELECT nombre, apellidoPaterno, apellidoMaterno FROM staff ORDER BY nombre");
	$staff = array();
	while($object = mysqli_fetch_object($data)){
		$staff[]=$object;
	}
	$selectValues = "";
	foreach ($staff as $staf) {
		$selectValues.= "<option value=".$staf->nombre." ".$staf->apellidoPaterno." ".$staf->apellidoMaterno." ";
		$selectValues.= ">".$staf->nombre." ".$staf->apellidoPaterno." ".$staf->apellidoMaterno."</option>";
	}
	echo $selectValues;
?>