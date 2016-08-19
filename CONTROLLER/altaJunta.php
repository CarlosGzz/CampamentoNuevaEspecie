<?php
	include ("../MODEL/connect.php");
	header("Content-Type: text/html;charset=utf-8");
	if(isset($_POST["nombreJunta"])){
		if(!empty($_POST['nombreJunta'])){
			$nombreJunta = trim($_POST["nombreJunta"]);
			$fechaJunta = trim($_POST["fechaJunta"]);
			$sql = "INSERT INTO junta (idCampamento, nombre, fecha)
					VALUES ('1', '$nombreJunta', '$fechaJunta')";
			if ($db->query($sql) === TRUE) {
				echo "1";
			} else {
				echo "<script>alert('Error:  ". $sql . "<br>" . $db->error."')</script>";
			}
			$data = $db->query("SELECT idJunta as idJunta FROM junta WHERE nombre='$nombreJunta'");
			$idJunta = mysqli_fetch_assoc($data);
			$junta = $idJunta["idJunta"];
			$data = $db->query("SELECT * FROM staff");
			while($object = mysqli_fetch_object($data)){
				$staff[]=$object;
			}
			foreach ($staff as $staf) {
				$valueStaff = substr($_POST["staff".$staf->idStaff], -4);
				$idStaff = $staf->idStaff;
				if($valueStaff == 1){
					$sql = "INSERT INTO staffJunta (idJunta, idStaff, asistencia)
					VALUES ('$junta', '$idStaff','1')"; 
				}else{
					$sql = "INSERT INTO staffJunta (idJunta, idStaff, asistencia)
					VALUES ('$junta', '$idStaff','0')"; 
				}

				if ($db->query($sql) === TRUE) {
					echo "1";
				} else {
					echo "<script>alert('Error:  ". $sql . "<br>" . $db->error."')</script>";
				} 
			}

		}
		$_POST = array();
	 	unset($_POST);
	 	header("Location: ../VIEW/DASHBOARD/STAFF/ASISTENCIAS/index.php");
	}else{
		header("Location: ../VIEW/DASHBOARD/STAFF/ASISTENCIAS/index.php");
	} 
?>