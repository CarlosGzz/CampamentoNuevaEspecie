<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Pagina para staff de Dashboard Campamento Nueva Especie">
    <meta name="author" content="Carlos Gonzalez">
    <link rel="icon" href="../VIEW/IMG/lxmlogo.png">

    <title>Dashboard de Campamento Nueva Especie Solo Staff</title>

    <!-- Bootstrap core CSS -->

    <link href="../VIEW/CSS/bootstrap.min.css" rel="stylesheet">

    <link href="../VIEW/FONTS/css/font-awesome.min.css" rel="stylesheet">
    <link href="../VIEW/CSS/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="../VIEW/CSS/custom.css" rel="stylesheet">
    <link href="../VIEW/CSS/popup.css" rel="stylesheet">
    <link href="../VIEW/CSS/icheck/flat/green.css" rel="stylesheet" />


    <script src="../CONTROLLER/JS/jquery.min.js"></script>


</head>


<body class="nav-md" >
    <div class="row">
        <div class="col-md-8 col-sm-8 col-xs-10 col-md-offset-2 col-sm-offset-2 col-xs-offset-1">
            <div class="page-title">
                    <h3 style="font-size:40px ;color: #9B9692; text-align: center;">
                        <img src="../VIEW/IMG/logoNe.png" style="width:150px; height:auto;">
                        Staff Dashboard
                        <img src="../VIEW/IMG/logoNe.png" style="width:150px; height:auto;">
                        <br>
                        Nueva Especie
                    </h3>
            </div>
        </div>
    </div>
    <br>
    <div class="clearfix"></div>

            <!-- page content -->
                    <div class="row ">
                        <div class="col-md-10 col-sm-10 col-xs-10 col-md-offset-1 col-sm-offset-1 col-xs-offset-1">
                            <div class="x_panel">
                                <div class="x_content">
                                    <div class="row">
                                        <div class="page-title">
                                            <div class="title_left">
                                                <h3> Vivientes <small></small></h3>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Fast Insights Vivientes-->
                                    <div class="row top_tiles" style="margin: 10px 0;">
                                        <div class="row top_tiles">
                                            <!--Viventes Pagados-->
                                            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                <div class="tile-stats" id="vivientesPagados">
                                                    <div class="icon"><i class="fa fa-money"></i></div>
                                                    <div class="count">
                                                    <?php
                                                        require "../MODEL/connect.php";
                                                        $data = $db->query("SELECT COUNT(idViviente) as totalPagados FROM viviente WHERE pagado>0");
                                                        $totalPagados=mysqli_fetch_assoc($data);
                                                        echo $totalPagados['totalPagados'];
                                                    ?>
                                                    </div>
                                                    <h3>Pagados</h3>
                                                    <p> </p>
                                                </div>
                                            </div>
                                            <!--/Viventes Pagados-->
                                            <!--Viventes Encuestados-->
                                            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                <div class="tile-stats">
                                                    <div class="icon"><i class="fa fa-file-text"></i></div>
                                                    <div class="count">
                                                    <?php
                                                        $data = $db->query("SELECT COUNT(idViviente) as totalEncuestados FROM viviente WHERE gaia>0");
                                                        $totalEncuestados=mysqli_fetch_assoc($data);
                                                        echo $totalEncuestados['totalEncuestados'];
                                                    ?>
                                                    </div>
                                                    <h3>Ecuestados</h3>
                                                    <p></p>
                                                </div>
                                            </div>
                                            <!--/Viventes Encuestados-->
                                            <!--Viventes Registrados-->
                                            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                <div class="tile-stats">
                                                    <div class="icon"><i class="fa fa-user"></i></div>
                                                    <div class="count">

                                                    <?php
                                                        $data = $db->query("SELECT COUNT(idViviente) as totalVivientes FROM viviente");
                                                        $totalVivientes=mysqli_fetch_assoc($data);
                                                        echo $totalVivientes['totalVivientes'];
                                                    ?>

                                                    </div>
                                                    <h3>Registrados</h3>
                                                    <p> </p>
                                                </div>
                                            </div>
                                            <!--/Viventes Registrados-->
                                            <!--Viventes Vacantes-->
                                            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                <div class="tile-stats">
                                                    <div class="icon"><i class="fa fa-group"></i></div>
                                                    <div class="count">
                                                    <?php
                                                        echo 45-$totalPagados['totalPagados'];
                                                    ?>
                                                    </div>
                                                    <h3>Vacantes</h3>
                                                    <p></p>
                                                </div>
                                            </div>
                                            <!--/Viventes Vacantes-->
                                        </div>
                                    </div>
                                    <!--/Fast Insights Vivientes-->
                                    <div class="row">
                                        <div class="page-title">
                                            <div class="title_left">
                                                <h3> Staff <small></small></h3>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Fast Insights Staff-->
                                    <div class="row top_tiles">
                                        <div class="row top_tiles">
                                            <!--Staff Pagados-->
                                            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                <div class="tile-stats">
                                                    <div class="icon" ><i class="fa fa-money"></i></div>
                                                    <div class="count" >
                                                    <?php
                                                        
                                                        $data = $db->query("SELECT COUNT(s.idStaff) as totalStaffPagados FROM staff as s INNER JOIN staffCampamento as c ON s.idStaff = c.idStaff WHERE c.pagado>0");
                                                        $totalStaffPagados=mysqli_fetch_assoc($data);
                                                        echo $totalStaffPagados['totalStaffPagados'];
                                                    ?>
                                                    </div>
                                                    <h3>Pagados</h3>
                                                    <p> </p>
                                                </div>
                                            </div>
                                            <!--/Staff Pagados-->
                                            <!--Staff Asistentes-->
                                            <div class="animated flipInY col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                <div class="tile-stats">
                                                    <div class="icon"><i class="fa fa-file-text"></i></div>
                                                    <div class="count">
                                                    <?php
                                                        $data = $db->query("SELECT COUNT(s.idStaff) as totalStaffAsistentes FROM staff as s INNER JOIN staffCampamento as c ON s.idStaff = c.idStaff ");
                                                        $totalStaffAsistentes=mysqli_fetch_assoc($data);
                                                        echo $totalStaffAsistentes['totalStaffAsistentes'];
                                                    ?>
                                                    </div>
                                                    <h3>Asistentes</h3>
                                                    <p></p>
                                                </div>
                                            </div>
                                            <!--/Staff Asistentes-->
                                            <!--Staff Registrados-->
                                            <div class="animated flipInY col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                <div class="tile-stats">
                                                    <div class="icon"><i class="fa fa-user"></i></div>

                                                    <div class="count">

                                                    <?php
                                                        $data = $db->query("SELECT COUNT(idStaff) as totalStaff FROM staff");
                                                        $totalStaff=mysqli_fetch_assoc($data);
                                                        echo $totalStaff['totalStaff'];
                                                    ?>

                                                    </div>
                                                    <h3>Total</h3>
                                                    <p> </p>
                                                </div>
                                            </div>
                                            <!--/Staff Registrados-->
                                            <!--Staff Viejos/Nuevos-->
                                            <div class="animated flipInY col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                <div class="tile-stats">
                                                    <div class="icon" style="color: #2196f3;">
                                                        <td>
                                                            <canvas id="canvas3" height="50" width="50" style="margin: 0px 0px 0px 0px"></canvas>
                                                        </td>
                                                    </div>
                                                    <div class="count">
                                                    <?php
                                                        $data = $db->query("SELECT COUNT(idStaff) as viejosStaff FROM staff WHERE pulsera ='rojo' OR pulsera ='plateada'");
                                                        $viejosStaff=mysqli_fetch_assoc($data);
                                                        echo $viejosStaff['viejosStaff']."/".$totalStaff['totalStaff']-$viejosStaff['viejosStaff'];
                                                    ?>
                                                    </div>
                                                    <h3>Viejos/Nuevos</h3>
                                                    <p></p>
                                                </div>
                                            </div>
                                            <!--/Staff Viejos/Nuevos-->
                                        </div>
                                    </div>
                                    <br />
                                </div>

                                <?php
                                    $data = $db->query("SELECT idViviente, fechaNacimiento, nombre, sexo FROM viviente ");
                                    $vivientes = array();
                                    $contadorMenores = 0;
                                    $contadorIntervalo2 = 0;
                                    $contadorIntervalo3 = 0;
                                    $contadorIntervalo4 = 0;
                                    $contadorIntervalo5 = 0;
                                    $contadorNoFecha = 0;
                                    $contadorMayores = 0;
                                    $contadorHombres = 0;
                                    $contadorMujeres = 0;
                                    $total = 0;
                                    while($object = mysqli_fetch_object($data)){
                                        $vivientes[]=$object;
                                    }
                                    if(!empty($vivientes)){
                                        foreach ($vivientes as $viviente) {
                                            if(!empty($viviente->fechaNacimiento) || $viviente->fechaNacimiento != null){
                                                $birthDate = $viviente->fechaNacimiento;
                                                $birthDate = explode("-", $birthDate);
                                                $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[2], $birthDate[1], $birthDate[0]))) > date("md")? ((date("Y") - $birthDate[0]) - 1): (date("Y") - $birthDate[0]));
                                            }else{
                                                $age = 0;  
                                            }
                                            if($age < 18){
                                                if($age==0){
                                                    $contadorNoFecha++;
                                                }else{
                                                    $contadorMenores++;
                                                }

                                            }
                                            if($age == 18 || $age == 19){
                                                $contadorIntervalo2++;
                                            }
                                            if($age == 20 || $age == 21){
                                                $contadorIntervalo3++;
                                            }
                                            if($age == 22 || $age == 23){
                                                $contadorIntervalo4++;
                                            }
                                            if($age == 24 || $age == 25){
                                                $contadorIntervalo5++;
                                            }
                                            if($age > 25){
                                                $contadorMayores++;
                                            }

                                            if($viviente->sexo == "M"){
                                                $contadorHombres++;
                                            }
                                            if($viviente->sexo == "F"){
                                                $contadorMujeres++;
                                            }
                                            $total++;
                                        }
                                    }else{
                                        $contadorMenores = 1;
                                        $contadorIntervalo2 = 1;
                                        $contadorIntervalo3 = 1;
                                        $contadorIntervalo4 = 1;
                                        $contadorIntervalo5 = 1;
                                        $contadorNoFecha = 1;
                                        $contadorMayores = 1;
                                        $contadorHombres = 1;
                                        $contadorMujeres = 1;
                                        $total = 1;

                                    }
                                    $db->close();
                                ?>


                                <!--Edades-->
                                <div class="row">
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="x_panel fixed_height_320">
                                            <div class="x_title">
                                                <h2>Edades Vivientes</h2>
                                                <ul class="nav navbar-right panel_toolbox">
                                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                                    </li>
                                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                                    </li>
                                                </ul>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="x_content">

                                                <table class="tile" style="width:100%">
                                                    <tr>
                                                        <th style="width:37%;">
                                                            <span></span>
                                                        </th>
                                                        <th>
                                                            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                                                <span class="hidden-small">Rango</span>
                                                            </div>
                                                            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                                                <span class="hidden-small">Total</span>
                                                            </div>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <canvas id="canvas1" height="140" width="140" style="margin: 15px 10px 10px 0"></canvas>
                                                        </td>
                                                        <td>
                                                            <table class="tile_info">
                                                                <tr>
                                                                    <td>
                                                                        <p><i class="fa fa-square grey"></i>-18</p>
                                                                    </td>
                                                                    <td>
                                                                        <?php
                                                                           echo number_format($contadorMenores/$total*100,0); echo "%";
                                                                        ?>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <p><i class="fa fa-square blue"></i>18-19</p>
                                                                    </td>
                                                                    <td>
                                                                        <?php echo number_format($contadorIntervalo2/$total*100,0); echo "%"; ?>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <p><i class="fa fa-square green"></i>20-21</p>
                                                                    </td>
                                                                    <td>
                                                                        <?php echo number_format($contadorIntervalo3/$total*100,0); echo "%"; ?>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <p><i class="fa fa-square purple"></i>22-23</p>
                                                                    </td>
                                                                    <td>
                                                                        <?php echo number_format($contadorIntervalo4/$total*100,0); echo "%"; ?>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <p><i class="fa fa-square aero"></i>24-25</p>
                                                                    </td>
                                                                    <td>
                                                                        <?php echo number_format($contadorIntervalo5/$total*100,0); echo "%"; ?>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <p><i class="fa fa-square red"></i>25+</p>
                                                                    </td>
                                                                    <td>
                                                                        <?php echo number_format($contadorMayores/$total*100,0); echo "%"; ?>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                  

                                    <!--Hombres y Mujeres-->
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="x_panel fixed_height_320">
                                            <div class="x_title">
                                                <h2>Genero Vivientes</h2>
                                                <ul class="nav navbar-right panel_toolbox">
                                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                                    </li>
                                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                                    </li>
                                                </ul>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="x_content">

                                                <table class="tile" style="width:100%">
                                                    <tr>
                                                        <th style="width:37%;">
                                                        </th>
                                                        <th>
                                                            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                                                <span class="hidden-small">Genero Vivientes</span>
                                                            </div>
                                                            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                                                <span class="hidden-small">%</span>
                                                            </div>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <canvas id="canvas2" height="140" width="140" style="margin: 15px 10px 10px 0"></canvas>
                                                        </td>
                                                        <td>
                                                            <table class="tile_info">
                                                                <tr>
                                                                    <td>
                                                                        <p><i class="fa fa-square blue"></i>Hombres</p>
                                                                    </td>
                                                                    <td>
                                                                        <?php echo number_format($contadorHombres/$total*100,0); echo "%"; ?>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <p><i class="fa fa-square red"></i>Mujeres</p>
                                                                    </td>
                                                                    <td>
                                                                        <?php echo number_format($contadorMujeres/$total*100,0); echo "%"; ?>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                
                                <!--Hombres y Mujeres-->
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="x_panel fixed_height_320">
                                            <div class="x_title">
                                                <h2>Comunicados</h2>
                                                <ul class="nav navbar-right panel_toolbox">
                                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                                    </li>
                                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                                    </li>
                                                </ul>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="x_content">
                                                    <?php 
                                                        require "../MODEL/connect.php";
                                                        $data = $db->query("SELECT * FROM comunicado ");
                                                        $comunicados = array();
                                                        $stringComunicado="";
                                                        while($object = mysqli_fetch_object($data)){
                                                            $comunicados[]=$object;
                                                        }
                                                        if(!empty($comunicados)){
                                                            foreach ($comunicados as $comunicado) {
                                                                $stringComunicado.="<h4>".$comunicado->titulo."</h4>";
                                                                $stringComunicado.="<p>".$comunicado->comunicado."</p>";
                                                            }
                                                        }else{ 
                                                            $stringComunicado = '<h2>"El éxito es la suma de pequeños esfuerzos repetidos día a día."</h2>';
                                                        }
                                                        echo $stringComunicado;
                                                        ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                </div>

                <!-- footer content -->
                <footer>
                    <div class="">
                        <p class="pull-right">Campamento Nueva Especie Dashboard | Made With Love & Code
                        </p>
                    </div>
                    <div class="clearfix"></div>
                </footer>
                <!-- /footer content -->

            </div>
            <!-- /page content -->
        </div>


    </div>

    <div id="custom_notifications" class="custom-notifications dsp_none">
        <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
        </ul>
        <div class="clearfix"></div>
        <div id="notif-group" class="tabbed_notifications"></div>
    </div>
    <!-- popup js 
    <aside class="avgrund-popup">
        <h2>That's all, folks</h2>
        <p>
            You can hit ESC or click outside to close the modal. Give it a go to see the reverse transition.
        </p>
        <button onclick="avgrund.deactivate();">Close</button>
    </aside>-->

    <script src="../CONTROLLER/JS/bootstrap.min.js"></script>
    <!-- chart js -->
    <script src="../CONTROLLER/JS/chartjs/chart.min.js"></script>
    <!-- bootstrap progress js -->
    <script src="../CONTROLLER/JS/nicescroll/jquery.nicescroll.min.js"></script>

    <script src="../CONTROLLER/JS/custom.js"></script>


    <!-- Script para hacer mas grande el icono --> 
    <script>
        var x=1;
        $("#menu_toggle").click(function(){
            if(x==1){
                $('#mainIcon').width(45);
                $('#mainIcon').height(45);
                x=0;
            }else
                if(x==0){
                    $('#mainIcon').width(30);
                    $('#mainIcon').height(30);
                    x=1;
                }
        }); 
    </script>

    <!-- Script para llenar la informacion de las ChartJS -->
    <script>
        $('document').ready(function () {

            var edadesDoughnutData = [
                {
                    value: <?php echo $contadorMenores; ?>,
                    color: "#070D0D"
                },
                {
                    value: <?php echo $contadorIntervalo2; ?>,
                    color: "#3498DB"
                },
                {
                    value: <?php echo $contadorIntervalo3; ?>,
                    color: "#1ABB9C"
                },
                {
                    value: <?php echo $contadorIntervalo4; ?>,
                    color: "#9B59B6"
                },
                {
                    value: <?php echo $contadorIntervalo5; ?>,
                    color: "#9CC2CB"
                },
                {
                    value: <?php echo $contadorMayores; ?>,
                    color: "#E74C3C"
                }
             ];
            var edadesDoughnut = new Chart(document.getElementById("canvas1").getContext("2d")).Doughnut(edadesDoughnutData);

            var hombresMujeresPieData = [
                {
                    value: <?php echo $contadorHombres; ?>,
                    color: "#3498Db"
                },
                {
                    value: <?php echo $contadorMujeres; ?>,
                    color: "#E74C3C"
                }
             ];
            var hombresMujeresPie = new Chart(document.getElementById("canvas2").getContext("2d")).Pie(hombresMujeresPieData);

            var viejosnuevosPieData = [
                {
                    value: 5,
                    color: "#070D0D"
                },
                {
                    value: 5,
                    color: "#2196f3"
                }
             ];
            var viejosnuevosPie = new Chart(document.getElementById("canvas3").getContext("2d")).Pie(viejosnuevosPieData);
        })
    </script>



    <script type="text/javascript">
    function toggleFullScreen(elem) {
        // ## The below if statement seems to work better ## if ((document.fullScreenElement && document.fullScreenElement !== null) || (document.msfullscreenElement && document.msfullscreenElement !== null) || (!document.mozFullScreen && !document.webkitIsFullScreen)) {
        if ((document.fullScreenElement !== undefined && document.fullScreenElement === null) || (document.msFullscreenElement !== undefined && document.msFullscreenElement === null) || (document.mozFullScreen !== undefined && !document.mozFullScreen) || (document.webkitIsFullScreen !== undefined && !document.webkitIsFullScreen)) {
            if (elem.requestFullScreen) {
                elem.requestFullScreen();
            } else if (elem.mozRequestFullScreen) {
                elem.mozRequestFullScreen();
            } else if (elem.webkitRequestFullScreen) {
                elem.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT);
            } else if (elem.msRequestFullscreen) {
                elem.msRequestFullscreen();
            }
        } else {
            if (document.cancelFullScreen) {
                document.cancelFullScreen();
            } else if (document.mozCancelFullScreen) {
                document.mozCancelFullScreen();
            } else if (document.webkitCancelFullScreen) {
                document.webkitCancelFullScreen();
            } else if (document.msExitFullscreen) {
                document.msExitFullscreen();
            }
        }
    }
    </script>
</body>

</html>