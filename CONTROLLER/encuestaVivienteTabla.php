<?php
    require "../../../../MODEL/connect.php";
    $data = $db->query("SELECT v.nombre,v.apellidoPaterno,v.apellidoMaterno,e.reservado,e.sabiduria,e.idealista,e.explosivo, e.optimismo,e.prudencia,e.disciplina,e.pasion,e.hipersensibilidad, e.generosidad,e.handy,e.teson,e.elocuente,e.aventado,e.empatia,e.misterioso,e.fortaleza,e.improvisar,e.afable, e.lealtad,e.franco,e.sobreprotector,e.creativo,e.movido, e.triunfar,e.personalidad,e.mismo,e.cualidades,e.defectos, e.fiesta FROM encuesta as e INNER JOIN viviente as v ON e.idViviente=v.idViviente");
    $encuestas = array();
    while($object = mysqli_fetch_object($data)){
        $encuestas[]=$object;
    }
    $cualidades = array();
    $tableString = "<tbody>";
    if(!empty($encuestas)){
        foreach ($encuestas as $encuesta) {
            $quimera = 0.0;
            $lycan = 0.0;
            $draco = 0.0;
            $fenix = 0.0;
            $unicorino = 0.0;
            $tableString.= "<tr>";
            $tableString.= "<td>".$encuesta->nombre." ".$encuesta->apellidoPaterno." ".$encuesta->apellidoMaterno."</td>";
            $cualidades[0] = $encuesta->reservado;
            $cualidades[1] = $encuesta->prudencia;
            $cualidades[2] = $encuesta->handy;
            $cualidades[3] = $encuesta->misterioso;
            $cualidades[4] = $encuesta->franco;
            $cualidades[5] = $encuesta->sabiduria;
            $cualidades[6] = $encuesta->disciplina;
            $cualidades[7] = $encuesta->teson;
            $cualidades[8] = $encuesta->fortaleza;
            $cualidades[9] = $encuesta->sobreprotector;
            $cualidades[10] = $encuesta->idealista;
            $cualidades[11] = $encuesta->pasion;
            $cualidades[12] = $encuesta->elocuente;
            $cualidades[13] = $encuesta->improvisar;
            $cualidades[14] = $encuesta->creativo;
            $cualidades[15] = $encuesta->explosivo;
            $cualidades[16] = $encuesta->hipersensibilidad;
            $cualidades[17] = $encuesta->aventado;
            $cualidades[18] = $encuesta->afable;
            $cualidades[19] = $encuesta->movido;
            $cualidades[20] = $encuesta->optimismo;
            $cualidades[21] = $encuesta->generosidad;
            $cualidades[22] = $encuesta->empatia;
            $cualidades[23] = $encuesta->lealtad;
            $cualidades[24] = $encuesta->triunfar;
            for($i = 0; $i<25; $i++){
                switch ($cualidades[$i]) {
                    case 1:
                        $cualidades[$i]=5;
                        break;
                    case 2:
                        $cualidades[$i]=4;
                        break;
                    case 3:
                        $cualidades[$i]=3;
                        break;
                    case 4:
                        $cualidades[$i]=2;
                        break;
                    case 5:
                        $cualidades[$i]=1;
                        break;
                    default:
                        break;
                }
            }
            $suma=0;
            for($i = 0; $i<5; $i++){
                $suma += $cualidades[$i];
            }
            $quimera = $suma*0.6666666667;
            $suma=0;
            for($i = 5; $i<10; $i++){
                $suma += $cualidades[$i];
            }
            $lycan = $suma*0.6666666667;
            $suma=0;
            for($i = 10; $i<15; $i++){
                $suma += $cualidades[$i];
            }
            $draco = $suma*0.6666666667;
            $suma=0;
            for($i = 15; $i<20; $i++){
                $suma += $cualidades[$i];
            }
            $fenix = $suma*0.6666666667;
            $suma=0;
            for($i = 20; $i<24; $i++){
                $suma += $cualidades[$i];
            }

            $unicorino = $suma*0.6666666667;
            $tableString.= "<td>".sprintf("%.2f%%",$quimera)."</td>";
            $tableString.= "<td>".sprintf("%.2f%%",$lycan)."</td>";
            $tableString.= "<td>".sprintf("%.2f%%",$draco)."</td>";
            $tableString.= "<td>".sprintf("%.2f%%",$fenix)."</td>";
            $tableString.= "<td>".sprintf("%.2f%%",$unicorino)."</td>";
            $tableString.= "<td>".$encuesta->personalidad."</td>";
            $tableString.= "<td>".$encuesta->mismo."</td>";
            $tableString.= "<td>".$encuesta->cualidades."</td>";
            $tableString.= "<td>".$encuesta->defectos."</td>";
            $tableString.= "<td>".$encuesta->fiesta."</td>";

            $tableString.= "<td>";
            $tableString.="<table class='table table-striped table-bordered'>";
            $tableString.="<thead>";
            $tableString.="<tr>";
            $tableString.="<th>Cualidad</th>";
            $tableString.="<th>Puntaje</th>";
            $tableString.="</tr>";
            $tableString.="</thead>";
            $tableString.="<tbody>";
            $tableString.="<tr><td>Reservado</td><td style='text-align:center'>".$encuesta->reservado."</td><tr>";
            $tableString.="<tr><td>Sabiduria</td><td style='text-align:center'>".$encuesta->sabiduria."</td><tr>";
            $tableString.="<tr><td>Idealista</td><td style='text-align:center'>".$encuesta->idealista."</td><tr>";
            $tableString.="<tr><td>Explosivo</td><td style='text-align:center'>".$encuesta->explosivo."</td><tr>";
            $tableString.="<tr><td>Optimismo</td><td style='text-align:center'>".$encuesta->optimismo."</td><tr>";
            $tableString.="</tbody>";
            $tableString.="</table>";
            $tableString."</td>";

            $tableString.= "<td>";
            $tableString.="<table class='table table-striped table-bordered'>";
            $tableString.="<thead>";
            $tableString.="<tr>";
            $tableString.="<th>Cualidad</th>";
            $tableString.="<th>Puntaje</th>";
            $tableString.="</tr>";
            $tableString.="</thead>";
            $tableString.="<tbody>";
            $tableString.="<tr><td>Prudencia</td><td style='text-align:center'>".$encuesta->prudencia."</td><tr>";
            $tableString.="<tr><td>Disciplina</td><td style='text-align:center'>".$encuesta->disciplina."</td><tr>";
            $tableString.="<tr><td>Pasion</td><td style='text-align:center'>".$encuesta->pasion."</td><tr>";
            $tableString.="<tr><td>Hipersensibilidad</td><td style='text-align:center'>".$encuesta->hipersensibilidad."</td><tr>";
            $tableString.="<tr><td>Generosidad</td><td style='text-align:center'>".$encuesta->generosidad."</td><tr>";
            $tableString.="</tbody>";
            $tableString.="</table>";
            $tableString."</td>";

            $tableString.= "<td>";
            $tableString.="<table class='table table-striped table-bordered'>";
            $tableString.="<thead>";
            $tableString.="<tr>";
            $tableString.="<th>Cualidad</th>";
            $tableString.="<th>Puntaje</th>";
            $tableString.="</tr>";
            $tableString.="</thead>";
            $tableString.="<tbody>";
            $tableString.="<tr><td>Handy</td><td style='text-align:center'>".$encuesta->handy."</td><tr>";
            $tableString.="<tr><td>Téson</td><td style='text-align:center'>".$encuesta->teson."</td><tr>";
            $tableString.="<tr><td>Elocuente</td><td style='text-align:center'>".$encuesta->elocuente."</td><tr>";
            $tableString.="<tr><td>Aventado</td><td style='text-align:center'>".$encuesta->aventado."</td><tr>";
            $tableString.="<tr><td>Empatia</td><td style='text-align:center'>".$encuesta->empatia."</td><tr>";
            $tableString.="</tbody>";
            $tableString.="</table>";
            $tableString."</td>";

            $tableString.= "<td>";
            $tableString.="<table class='table table-striped table-bordered'>";
            $tableString.="<thead>";
            $tableString.="<tr>";
            $tableString.="<th>Cualidad</th>";
            $tableString.="<th>Puntaje</th>";
            $tableString.="</tr>";
            $tableString.="</thead>";
            $tableString.="<tbody>";
            $tableString.="<tr><td>Misterioso</td><td style='text-align:center'>".$encuesta->misterioso."</td><tr>";
            $tableString.="<tr><td>Fortaleza</td><td style='text-align:center'>".$encuesta->fortaleza."</td><tr>";
            $tableString.="<tr><td>Improvisar</td><td style='text-align:center'>".$encuesta->improvisar."</td><tr>";
            $tableString.="<tr><td>Afable</td><td style='text-align:center'>".$encuesta->afable."</td><tr>";
            $tableString.="<tr><td>Lealtad</td><td style='text-align:center'>".$encuesta->lealtad."</td><tr>";
            $tableString.="</tbody>";
            $tableString.="</table>";
            $tableString."</td>";

            $tableString.= "<td>";
            $tableString.="<table class='table table-striped table-bordered'>";
            $tableString.="<thead>";
            $tableString.="<tr>";
            $tableString.="<th>Cualidad</th>";
            $tableString.="<th>Puntaje</th>";
            $tableString.="</tr>";
            $tableString.="</thead>";
            $tableString.="<tbody>";
            $tableString.="<tr><td>Franco</td><td style='text-align:center'>".$encuesta->franco."</td><tr>";
            $tableString.="<tr><td>Sobreprotector</td><td style='text-align:center'>".$encuesta->sobreprotector."</td><tr>";
            $tableString.="<tr><td>Creativo</td><td style='text-align:center'>".$encuesta->creativo."</td><tr>";
            $tableString.="<tr><td>Movido</td><td style='text-align:center'>".$encuesta->movido."</td><tr>";
            $tableString.="<tr><td>Triunfar</td><td style='text-align:center'>".$encuesta->triunfar."</td><tr>";
            $tableString.="</tbody>";
            $tableString.="</table>";
            $tableString."</td>";


        }
    }
    $tableString.= "</tbody>";
    echo $tableString;
?>