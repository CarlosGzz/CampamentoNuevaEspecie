<?php
    require "../../../../MODEL/connect.php";
    $data = $db->query("SELECT v.nombre,v.apellidoPaterno,v.apellidoMaterno,f.nombreFamiliar,t.tipoFamiliar,f.telefonoFamiliar,f.celularFamiliar,f.correoFamiliar FROM familiar as f INNER JOIN viviente as v ON f.idViviente=v.idViviente INNER JOIN tipoFamiliar as t ON f.idTipoFamiliar = t.idTipoFamiliar ");
    $familiares = array();
    while($object = mysqli_fetch_object($data)){
        $familiares[]=$object;
    }
    $tableString = "<tbody>";
    if(!empty($familiares)){
        foreach ($familiares as $familiar) {
            $tableString.= "<tr>";
            $tableString.= "<td>".$familiar->nombre." ".$familiar->apellidoPaterno." ".$familiar->apellidoMaterno."</td>";
            $tableString.= "<td>".$familiar->nombreFamiliar."</td>";
            $tableString.= "<td>".$familiar->tipoFamiliar."</td>";
            $tableString.= "<td>".$familiar->telefonoFamiliar."</td>";
            $tableString.= "<td>".$familiar->celularFamiliar."</td>";
            $tableString.= "<td>".$familiar->correoFamiliar."</td>";
        }
    }
    $tableString.= "</tbody>";
    echo $tableString;
?>