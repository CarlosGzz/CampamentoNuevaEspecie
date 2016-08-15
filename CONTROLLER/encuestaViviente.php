<?php
	require "../MODEL/connect.php";
	if(!empty($_POST)){
		// Datos Personales
		$nombre = trim($_POST["nombre"]);
		$apellidoPaterno = trim($_POST["apellidoPaterno"]);
		$apellidoMaterno = trim($_POST["apellidoMaterno"]);
		$genero = trim($_POST["genero"]); 
		$fechaNacimiento = trim($_POST["fechaNacimiento"]);
		$celular = trim($_POST["celular"]);
		$telefonoCasa = trim($_POST["telefonoCasa"]);
		$correo = trim($_POST["correo"]);
		$restriccionesAlimentarias = trim($_POST["restriccionesAlimentarias"]);
		$alergias = trim($_POST["alergias"]);
		$medioCampamento = trim($_POST["medioCampamento"]);
		$staff = trim($_POST["staff"]);
		$otroStaff = trim($_POST["otroStaff"]);


		// Encuesta
		$reservado = trim($_POST["reservado"]);
		$sabiduria = trim($_POST["sabiduria"]);
		$idealista = trim($_POST["idealista"]);
		$explosivo = trim($_POST["explosivo"]);
		$optimismo = trim($_POST["optimismo"]);
		$prudencia = trim($_POST["prudencia"]);
		$disciplina = trim($_POST["disciplina"]);
		$pasion = trim($_POST["pasion"]);
		$hipersensibilidad = trim($_POST["hipersensibilidad"]);
		$generosidad = trim($_POST["generosidad"]);
		$handy = trim($_POST["handy"]);
		$teson = trim($_POST["teson"]);
		$elocuente = trim($_POST["elocuente"]);
		$aventado = trim($_POST["aventado"]);
		$empatia = trim($_POST["empatia"]);
		$misterioso = trim($_POST["misterioso"]);
		$fortaleza = trim($_POST["fortaleza"]);
		$improvisar = trim($_POST["improvisar"]);
		$afable = trim($_POST["afable"]);
		$lealtad = trim($_POST["lealtad"]);
		$franco = trim($_POST["franco"]);
		$sobreprotector = trim($_POST["sobreprotector"]);
		$creativo = trim($_POST["creativo"]);
		$movido = trim($_POST["movido"]);
		$triunfar = trim($_POST["triunfar"]);
		$personalidad = trim($_POST["personalidad"]);
		$mismo = trim($_POST["mismo"]);
		$cualidades = trim($_POST["cualidades"]);
		$defectos = trim($_POST["defectos"]);
		$fiesta = trim($_POST["fiesta"]);

		//Datos familiares 
		$nombrePadre = trim($_POST["nombrePadre"]);
		$telefonoPadre = trim($_POST["telefonoPadre"]);
		$celularPadre = trim($_POST["celularPadre"]);
		$correoPadre = trim($_POST["correoPadre"]);
		$nombreMadre = trim($_POST["nombreMadre"]);
		$telefonoMadre = trim($_POST["telefonoMadre"]);
		$celularMadre = trim($_POST["celularMadre"]);
		$correoMadre = trim($_POST["correoMadre"]);
		$nombreAmigo1 = trim($_POST["nombreAmigo1"]);
		$telefonoAmigo1 = trim($_POST["telefonoAmigo1"]);
		$celularAmigo1 = trim($_POST["celularAmigo1"]);
		$correoAmigo1 = trim($_POST["correoAmigo1"]);
		$nombreAmigo2 = trim($_POST["nombreAmigo2"]);
		$telefonoAmigo2 = trim($_POST["telefonoAmigo2"]);
		$celularAmigo2 = trim($_POST["celularAmigo2"]);
		$correoAmigo2 = trim($_POST["correoAmigo2"]);
		$nombreAmigo3 = trim($_POST["nombreAmigo3"]);
		$telefonoAmigo3 = trim($_POST["telefonoAmigo3"]);
		$celularAmigo3 = trim($_POST["celularAmigo3"]);
		$correoAmigo3 = trim($_POST["correoAmigo3"]);

		$idViviente = 0;

		$query1 ="INSERT INTO viviente (sexo, nombre, apellidoPaterno, apellidoMaterno, fechaNacimiento, telefonoCasa, telefonoCel, correo, gaia, pagado, cartaSeguro, cartaDeslinde, observaciones,restriccionesAlimentarias, alergias, medioCampamento, staff, otroStaff) VALUES ('$genero','$nombre','$apellidoPaterno', '$apellidoMaterno', '$fechaNacimiento', '$telefonoCasa', '$celular', '$correo','0','0','0','0','', '$restriccionesAlimentarias', '$alergias', '$medioCampamento', '$staff', '$otroStaff')"; 

        $errorQuery = "";
        //echo $nombre." ".$apellidoPaterno." ".$apellidoMaterno." ".$genero." ".$fechaNacimiento." ".$celular." ".$telefonoCasa." ".$correo." ".$restriccionesAlimentarias." ".$alergias." ".$medioCampamento." ".$reservado." ".$sabiduria." ".$idealista." ".$explosivo." ".$optimismo." ".$prudencia." ".$disciplina." ".$pasion." ".$hipersensibilidad." ".$generosidad." ".$handy." ".$teson." ".$elocuente." ".$aventado." ".$empatia." ".$misterioso." ".$fortaleza." ".$improvisar." ".$afable." ".$lealtad." ".$franco." ".$sobreprotector." ".$creativo." ".$movido." ".$triunfar." ".$personalidad." ".$mismo." ".$cualidades." ".$defectos." ".$fiesta." ".$nombrePadre." ".$celularPadre." ".$correoPadre." ".$nombreMadre." ".$celularMadre." ".$correoMadre." ".$nombreAmigo1." ".$celularAmigo1." ".$correoAmigo1." ".$nombreAmigo2." ".$celularAmigo2." ".$correoAmigo2." ".$nombreAmigo3." ".$celularAmigo3." ".$correoAmigo3;
        if(!empty($_POST["nombre"]) && !empty($_POST["apellidoPaterno"]) && !empty($_POST["apellidoMaterno"]) && !empty($_POST["genero"]) && !empty($_POST["fechaNacimiento"]) && !empty($_POST["correo"]) && !empty($_POST["celular"]) && !empty($_POST["restriccionesAlimentarias"]) && !empty($_POST["medioCampamento"]) && !empty($_POST["reservado"]) && !empty($_POST["sabiduria"]) && !empty($_POST["idealista"]) && !empty($_POST["explosivo"]) && !empty($_POST["optimismo"]) && !empty($_POST["prudencia"]) && !empty($_POST["disciplina"]) && !empty($_POST["pasion"]) && !empty($_POST["hipersensibilidad"]) && !empty($_POST["generosidad"]) && !empty($_POST["handy"]) && !empty($_POST["teson"]) && !empty($_POST["elocuente"]) && !empty($_POST["aventado"]) && !empty($_POST["empatia"]) && !empty($_POST["misterioso"]) && !empty($_POST["fortaleza"]) && !empty($_POST["improvisar"]) && !empty($_POST["afable"]) && !empty($_POST["lealtad"]) && !empty($_POST["franco"]) && !empty($_POST["sobreprotector"]) && !empty($_POST["creativo"]) && !empty($_POST["movido"]) && !empty($_POST["triunfar"]) && !empty($_POST["personalidad"]) && !empty($_POST["mismo"]) && !empty($_POST["cualidades"]) && !empty($_POST["defectos"]) && !empty($_POST["fiesta"]) && !empty($_POST["nombrePadre"]) && !empty($_POST["celularPadre"]) && !empty($_POST["correoPadre"]) && !empty($_POST["nombreMadre"]) && !empty($_POST["celularMadre"]) && !empty($_POST["correoMadre"]) && !empty($_POST["nombreAmigo1"]) && !empty($_POST["celularAmigo1"]) && !empty($_POST["correoAmigo1"]) && !empty($_POST["nombreAmigo2"]) && !empty($_POST["celularAmigo2"]) && !empty($_POST["correoAmigo2"]) && !empty($_POST["nombreAmigo3"]) && !empty($_POST["celularAmigo3"]) && !empty($_POST["correoAmigo3"]) ){

        	$validacionDeQuery = 0;
        	// Query de datos personales de Viviente
			if ($db->query($query1) === TRUE) {
				$validacionDeQuery++;
			}else{
				$errorQuery.="<script>alert('Error:  ". $query1 . "<br>" . $db->error."')</script>";
			}
			// Obtener ID Viviente
			$data = $db->query("SELECT idViviente FROM viviente WHERE nombre='$nombre' AND apellidoPaterno='$apellidoPaterno' AND apellidoMaterno='$apellidoMaterno'");
			$idVivienteArray = array();
			while($object = mysqli_fetch_object($data)){
				$idVivienteArray[]=$object;
			}
			//var_dump($idVivienteArray);
			$idViviente = $idVivienteArray[0]->idViviente;
			$query2 = "INSERT INTO encuesta(idViviente, reservado, sabiduria, idealista, explosivo, optimismo, prudencia, disciplina, pasion, hipersensibilidad, generosidad, handy, teson, elocuente, aventado, empatia, misterioso, fortaleza, improvisar, afable, lealtad, franco, sobreprotector, creativo, movido, triunfar, personalidad, mismo, cualidades, defectos, fiesta) VALUES ('$idViviente','$reservado', '$sabiduria', '$idealista', '$explosivo', '$optimismo', '$prudencia', '$disciplina', '$pasion', '$hipersensibilidad','$generosidad', '$handy', '$teson', '$elocuente', '$aventado', '$empatia', '$misterioso', '$fortaleza', '$improvisar', '$afable', '$lealtad', '$franco', '$sobreprotector', '$creativo', '$movido', '$triunfar', '$personalidad', '$mismo', '$cualidades', '$defectos', '$fiesta')";

	        $query3 = "INSERT INTO familiar(idViviente, idTipoFamiliar, nombreFamiliar, telefonoFamiliar, celularFamiliar, correoFamiliar) VALUES ('$idViviente', '1', '$nombrePadre', '$telefonoPadre', '$celularPadre', '$correoPadre')";

	        $query4 = "INSERT INTO familiar(idViviente, idTipoFamiliar, nombreFamiliar, telefonoFamiliar, celularFamiliar, correoFamiliar) VALUES ('$idViviente', '2', '$nombreMadre', '$telefonoMadre', '$celularMadre', '$correoMadre')";

	        $query5 = "INSERT INTO familiar(idViviente, idTipoFamiliar, nombreFamiliar, telefonoFamiliar, celularFamiliar, correoFamiliar) VALUES ('$idViviente', '3', '$nombreAmigo1', '$telefonoAmigo1', '$celularAmigo1', '$correoAmigo1')";

	        $query6 = "INSERT INTO familiar(idViviente, idTipoFamiliar, nombreFamiliar, telefonoFamiliar, celularFamiliar, correoFamiliar) VALUES ('$idViviente', '4', '$nombreAmigo2', '$telefonoAmigo2', '$celularAmigo2', '$correoAmigo2')";

	        $query7 = "INSERT INTO familiar(idViviente, idTipoFamiliar, nombreFamiliar, telefonoFamiliar, celularFamiliar, correoFamiliar) VALUES ('$idViviente', '5', '$nombreAmigo3', '$telefonoAmigo3', '$celularAmigo3', '$correoAmigo3')";

	        $query8 = "INSERT INTO vivientesCampamento(idCampamento, idViviente) VALUES ('1', '$idViviente')";

			// Query de encuesta de Viviente
			if ($db->query($query2) === TRUE) {
				$validacionDeQuery++;
			} else {
				$errorQuery.= "<script>alert('Error:  ". $query2 . "<br>" . $db->error."')</script>";
			}

			// Query alta de Padre de viviente
			if ($db->query($query3) === TRUE) {
				$validacionDeQuery++;
			} else {
				$errorQuery.= "<script>alert('Error:  ". $query3 . "<br>" . $db->error."')</script>";
			}

			// Query alta de Madre de viviente
			if ($db->query($query4) === TRUE) {
				$validacionDeQuery++;
			} else {
				$errorQuery.= "<script>alert('Error:  ". $query4 . "<br>" . $db->error."')</script>";
			}

			// Query alta de Amigo 1 de viviente
			if ($db->query($query5) === TRUE) {
				$validacionDeQuery++;
			} else {
				$errorQuery.= "<script>alert('Error:  ". $query5 . "<br>" . $db->error."')</script>";
			}

			// Query alta de Amigo 2 de viviente
			if ($db->query($query6) === TRUE) {
				$validacionDeQuery++;
			} else {
				$errorQuery.= "<script>alert('Error:  ". $query6 . "<br>" . $db->error."')</script>";
			}

			// Query alta de Amigo 3 de viviente
			if ($db->query($query7) === TRUE) {
				$validacionDeQuery++;
			} else {
				$errorQuery.= "<script>alert('Error:  ". $query7 . "<br>" . $db->error."')</script>";
			}

			// Query alta de Amigo 3 de viviente
			if ($db->query($query8) === TRUE) {
				$validacionDeQuery++;
			} else {
				$errorQuery.= "<script>alert('Error:  ". $query8 . "<br>" . $db->error."')</script>";
			}

			if($validacionDeQuery == 8){
				echo "1";
			}else{
				echo $errorQuery;
			}
			
		}else{
			echo "2";
		}
	}

?>