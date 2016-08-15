<?php
    require "../../../MODEL/connect.php";
    $data = $db->query("SELECT * FROM viviente ORDER BY idViviente");
    $vivientes = array();
    while($object = mysqli_fetch_object($data)){
        $vivientes[]=$object;
    }
    $tableString = "<tbody>";
    if(!empty($vivientes)){
        foreach ($vivientes as $viviente) {
            $tableString.= "<tr>";
            $tableString.= "<td>".$viviente->sexo."</td>";
            $tableString.= "<td>".$viviente->nombre."</td>";
            $tableString.= "<td>".$viviente->apellidoPaterno." ".$viviente->apellidoMaterno."</td>";
            $tableString.= "<td>";
            if(!empty($viviente->fechaNacimiento) || $viviente->fechaNacimiento != null){
                $birthDate = $viviente->fechaNacimiento;
                $birthDate = explode("-", $viviente->fechaNacimiento);
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
            $tableString.= "<td>".$viviente->telefonoCasa."</td>";
            $tableString.= "<td>".$viviente->telefonoCel."</td>";
            $tableString.= "<td>".$viviente->correo."</td>";
            $tableString.= "<td>".$viviente->gaia."</td>";
            $tableString.= "<td>".$viviente->pagado."</td>";
            $tableString.= "<td>";
            if($viviente->cartaSeguro == 1){
                $tableString.= "firmada";
            }else{
                $tableString.= "no firmada";
            }
            $tableString.= "</td>";
            $tableString.= "<td>";
            if($viviente->cartaDeslinde == 1){
                $tableString.= "firmada";
            }else{
                $tableString.= "no firmada";
            }
            $tableString.= "</td>";
            $tableString.= "<td>".$viviente->observaciones."</td>";
            $tableString.= "<td>".$viviente->restriccionesAlimentarias."</td>";
            $tableString.= "<td>".$viviente->alergias."</td>";
            $tableString.= "<td>".$viviente->medioCampamento."</td>";
            if($viviente->medioCampamento == "Miembro de Staff"){
                if($viviente->staff == "Otro"){
                    $tableString.= "<td>".$viviente->otroStaff."</td>";
                }else{
                    $tableString.= "<td>".$viviente->staff."</td>";
                }
            }else{
                $tableString.= "<td>".$viviente->staff."</td>";
            }
        }
    }
    $tableString.= "</tbody>";
    echo $tableString;
?>