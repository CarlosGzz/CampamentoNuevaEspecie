<?php
  //Crear Evento
  session_start();

  if($_SESSION['validacion'] == 1){
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Pagina Inicial de Dashboard Campamento Nueva Especie">
    <meta name="author" content="Carlos Gonzalez">
    <link rel="icon" href="../IMG/lxmlogo.png">

    <title>Dashboard de Campamento Nueva Especie</title>

    <!-- Bootstrap core CSS -->

    <link href="../CSS/bootstrap.min.css" rel="stylesheet">

    <link href="../FONTS/css/font-awesome.min.css" rel="stylesheet">
    <link href="../FONTS/glyphicons-halflings-regular.woff2" rel="stylesheet">
    <link href="../FONTS/glyphicons-halflings-regular.woff" rel="stylesheet">
    <link href="../FONTS/glyphicons-halflings-regular.ttf" rel="stylesheet">
    <link href="../CSS/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="../CSS/custom.css" rel="stylesheet">
    <link href="../CSS/popup.css" rel="stylesheet">
    <link href="../../CONTROLLER/JS/Avgrund/avgrund.css" rel="stylesheet">
    <link href="../CSS/icheck/flat/green.css" rel="stylesheet" />


    <script src="../../CONTROLLER/JS/jquery.min.js"></script>


</head>


<body class="nav-md" >
    <div class="avgrund-cover"></div>
    <div class="container body avgrund-contents">
        <div class="main_container">

            <div class="col-md-3 left_col menu_fixed">
                <div class="left_col scroll-view">

                    <!--Titulo del app-->
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="index.php" class="site_title"><img id="mainIcon" style="width:30px;height:30px" src="../IMG/lxmlogo.png" alt="Logo Latiendo Por Mexico">
                            <span>Nueva Especie</span>
                        </a>
                    </div>
                    <div class="clearfix"></div>
                    <!--/Titulo del app-->

                    <!-- menu prile quick info -->
                    <div class="profile">
                        <div class="profile_pic">
                            <img src="../IMG/profile<?php echo $_SESSION['usuario'];?>.jpg" alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Hola,</span>
                            <h2><?php echo $_SESSION['nombre'];?></h2>
                        </div>
                    </div>
                    <!-- /menu prile quick info -->

                    <br />

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

                        <div class="menu_section">
                            <h3></h3>
                            <ul class="nav side-menu">
                                <li class="active" ><a><i class="fa fa-bar-chart"></i>Dashboard</a>
        
                                </li>
                                <li><a><i class="fa fa-users"></i>Vivientes <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="VIVIENTES/index.php">Vivientes</a>
                                        </li>
                                        <li><a href="VIVIENTES/FAMILIARES/index.php">Familiares</a>
                                        </li>
                                        <li><a href="VIVIENTES/PALANCAS/index.php">Palancas</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-star"></i>Staff <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="STAFF/index.php">Staff</a>
                                        </li>
                                        <li><a href="STAFF/pagosStaff.php">Pagos</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-bank"></i>Administrativo <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="ADMINISTRATIVO/index.php">Ingresos/Egresos</a>
                                        </li>
                                        <li><a href="ADMINISTRATIVO/fotos.php">Gastos Fijos</a>
                                        </li>
                                        <li><a href="ADMINISTRATIVO/fotos.php">Cocina</a>
                                        </li>
                                        <li><a href="ADMINISTRATIVO/fotos.php">Inventario Back</a>
                                        </li>
                                        <li><a href="ADMINISTRATIVO/fotos.php">Proveedores</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-beer"></i>Extra</a>
                                </li>
                                <?php
                                    if($_SESSION["usuario"] == "admin"){
                                        echo "
                                             <li>
                                                <a href='Vista/AdminSite'>
                                                    <i class='fa fa-code'></i>AdminSite
                                                </a>
                                             </li>
                                             ";
                                    }
                                ?>
                            </ul>
                        </div>
                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer ">
                        <a data-toggle="tooltip" data-placement="top" title="Settings" style="color: #6A6D6D;">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="FullScreen" onclick="toggleFullScreen(document.body)" style="color: #6A6D6D;">
                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Lock" style="color: #6A6D6D;">
                            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Logout" style="color: #6A6D6D;" href="../../">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <nav class="" role="navigation">
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>
                        
                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <img src="../IMG/profile<?php echo $_SESSION['usuario'];?>.jpg" alt=""><?php echo $_SESSION['nombre'];?>
                                    <span class=" fa fa-angle-down"></span>
                                </a>

                                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                                    <li>
                                        <a href="../../"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        
                    </nav>
                </div>

            </div>
            <!-- /top navigation -->


            <!-- page content -->
            <div class="right_col " role="main">
                <div class="">
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
                                <div class="tile-stats" onclick="avgrund.activate( 'stack' );" id="vivientesPagados">
                                    <div class="icon"><i class="fa fa-money"></i></div>
                                    <div class="count">
                                    <?php
                                        require "../../MODEL/connect.php";
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
                    <div class="col-md-8 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="col-md-8 col-sm-8 col-xs-12">
                                <div class="page-title">
                                    <div class="title_left">
                                        <h3> Staff <small></small></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!--Fast Insights Staff-->
                        <div class="row top_tiles" style="margin: 10px 0;">
                            <div class="row top_tiles">
                                <!--Staff Pagados-->
                                <div class="animated flipInY col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <div class="tile-stats">
                                        <div class="icon2" ><i class="fa fa-money"></i></div>
                                        <div class="count" style="font-size: 20px;">
                                        <?php
                                            require "../../MODEL/connect.php";
                                            $data = $db->query("SELECT COUNT(idViviente) as totalPagados FROM viviente WHERE pagado>0");
                                            $totalPagados=mysqli_fetch_assoc($data);
                                            echo $totalPagados['totalPagados'];
                                        ?>
                                        </div>
                                        <h3 style="font-size: 15px;">Pagados</h3>
                                        <p> </p>
                                    </div>
                                </div>
                                <!--/Staff Pagados-->
                                <!--Staff Asistentes-->
                                <div class="animated flipInY col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <div class="tile-stats">
                                        <div class="icon2"><i class="fa fa-file-text" style="font-size: 40px;"></i></div>
                                        <div class="count" style="font-size: 20px;">
                                        <?php
                                            $data = $db->query("SELECT COUNT(idViviente) as totalEncuestados FROM viviente WHERE gaia>0");
                                            $totalEncuestados=mysqli_fetch_assoc($data);
                                            echo $totalEncuestados['totalEncuestados'];
                                        ?>
                                        </div>
                                        <h3 style="font-size: 15px;">Asistentes</h3>
                                        <p></p>
                                    </div>
                                </div>
                                <!--/Staff Asistentes-->
                                <!--Staff Registrados-->
                                <div class="animated flipInY col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <div class="tile-stats">
                                        <div class="icon2"><i class="fa fa-user"></i></div>

                                        <div class="count" style="font-size: 20px;">

                                        <?php
                                            $data = $db->query("SELECT COUNT(idViviente) as totalVivientes FROM viviente");
                                            $totalVivientes=mysqli_fetch_assoc($data);
                                            echo $totalVivientes['totalVivientes'];
                                        ?>

                                        </div>
                                        <h3 style="font-size: 15px;">Total</h3>
                                        <p> </p>
                                    </div>
                                </div>
                                <!--/Staff Registrados-->
                                <!--Staff Viejos/Nuevos-->
                                <div class="animated flipInY col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <div class="tile-stats">
                                        <div class="icon3">
                                            <td>
                                                <canvas id="canvas3" height="50" width="50" style="margin: 0px 0px 0px 0px"></canvas>
                                            </td>
                                        </div>
                                        <div class="count" style="font-size: 20px;">
                                        <?php
                                            $string = " ".$totalVivientes['totalVivientes']."/".$totalVivientes['totalVivientes']." ";
                                            echo $string;
                                        ?>
                                        </div>
                                        <h3 style="font-size: 15px;">Viejos/Nuevos</h3>
                                        <p></p>
                                    </div>
                                </div>
                                <!--/Staff Viejos/Nuevos-->
                            </div>
                        </div>
                        <br />
                        <!--Punto de Equilibrio-->
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Bar Graph</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <div id="mainb" style="height: 350px; -webkit-tap-highlight-color: transparent; -webkit-user-select: none; position: relative; background-color: transparent;" _echarts_instance_="ec_1470052027409"><div style="position: relative; overflow: hidden; width: 455px; height: 350px; cursor: default;"><canvas width="910" height="700" data-zr-dom-id="zr_0" style="position: absolute; left: 0px; top: 0px; width: 455px; height: 350px; -webkit-user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></canvas></div><div style="position: absolute; display: none; border: 0px solid rgb(51, 51, 51); white-space: nowrap; z-index: 9999999; transition: left 0.4s cubic-bezier(0.23, 1, 0.32, 1), top 0.4s cubic-bezier(0.23, 1, 0.32, 1); border-radius: 4px; color: rgb(255, 255, 255); font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 14px; font-family: Arial, Verdana, sans-serif; line-height: 21px; padding: 5px; left: 254.333px; top: 208px; background-color: rgba(0, 0, 0, 0.498039);">12?<br><span style="display:inline-block;margin-right:5px;border-radius:10px;width:9px;height:9px;background-color:#26B99A"></span>sales : 3.3<br><span style="display:inline-block;margin-right:5px;border-radius:10px;width:9px;height:9px;background-color:#34495E"></span>purchases : 2.3</div></div>
                            </div>
                        </div>
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
                        $db->close();
                    ?>


                    <!--Edades-->
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="x_panel fixed_height_320">
                                <div class="x_title">
                                    <h2>Edades</h2>
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
                                    <h2>Generos</h2>
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
                                                    <span class="hidden-small">Genero</span>
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
                        <div class="row">
                            <!--Cotizaciones-->
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>Cotizaciones</h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                            </li>
                                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <table class="tile" style="width:100%">
                                        <tr>
                                            <th style="width:80%;">
                                                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                                    <span class="hidden-small">Genero</span>
                                                </div>
                                            </th>
                                            <th>
                                                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                                    <span class="hidden-small">%</span>
                                                </div>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="x_content">
                                                    <div id="placeholder3xx3" class="demo-placeholder" style="width: 100%; height:250px;"></div>
                                                </div>
                                            </td>
                                            <td>
                                                <table class="tile_info">
                                                    <tr>
                                                        <td>
                                                            <p><i class="fa fa-square blue"></i>Total Campamento</p>
                                                            <p>$345678</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p><i class="fa fa-square red"></i>Restante A Pagar</p>
                                                            <p>$345678</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p><i class="fa fa-square green"></i>Ganancia Proyectada</p>
                                                            <p>$345678</p>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <!--Cotizaciones-->
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

    <script src="../../CONTROLLER/JS/bootstrap.min.js"></script>
    <!-- popup js 
    <script src="../../CONTROLLER/JS/popup.js"></script>-->
    <!-- chart js -->
    <script src="../../CONTROLLER/JS/chartjs/chart.min.js"></script>
    <!-- bootstrap progress js -->
    <script src="../../CONTROLLER/JS/progressbar/bootstrap-progressbar.min.js"></script>
    <script src="../../CONTROLLER/JS/nicescroll/jquery.nicescroll.min.js"></script>
    <!-- icheck -->
    <script src="../../CONTROLLER/JS/icheck/icheck.min.js"></script>
    <!-- gauge js -->
    <script type="text/javascript" src="../../CONTROLLER/JS/gauge/gauge.min.js"></script>
    <!-- daterangepicker -->
    <script type="text/javascript" src="../../CONTROLLER/JS/moment/moment.min2.js"></script>
    <script type="text/javascript" src="../../CONTROLLER/JS/datepicker/daterangepicker.js"></script>

    <script src="../../CONTROLLER/JS/custom.js"></script>


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

    <!-- /ECHART -->
    <script src="../../CONTROLLER/JS/echart/echarts-all.js"></script>
    <script>
      var theme = {
          color: [
              '#26B99A', '#34495E', '#BDC3C7', '#3498DB',
              '#9B59B6', '#8abb6f', '#759c6a', '#bfd3b7'
          ],

          title: {
              itemGap: 8,
              textStyle: {
                  fontWeight: 'normal',
                  color: '#408829'
              }
          },

          dataRange: {
              color: ['#1f610a', '#97b58d']
          },

          toolbox: {
              color: ['#408829', '#408829', '#408829', '#408829']
          },

          tooltip: {
              backgroundColor: 'rgba(0,0,0,0.5)',
              axisPointer: {
                  type: 'line',
                  lineStyle: {
                      color: '#408829',
                      type: 'dashed'
                  },
                  crossStyle: {
                      color: '#408829'
                  },
                  shadowStyle: {
                      color: 'rgba(200,200,200,0.3)'
                  }
              }
          },

          dataZoom: {
              dataBackgroundColor: '#eee',
              fillerColor: 'rgba(64,136,41,0.2)',
              handleColor: '#408829'
          },
          grid: {
              borderWidth: 0
          },

          categoryAxis: {
              axisLine: {
                  lineStyle: {
                      color: '#408829'
                  }
              },
              splitLine: {
                  lineStyle: {
                      color: ['#eee']
                  }
              }
          },

          valueAxis: {
              axisLine: {
                  lineStyle: {
                      color: '#408829'
                  }
              },
              splitArea: {
                  show: true,
                  areaStyle: {
                      color: ['rgba(250,250,250,0.1)', 'rgba(200,200,200,0.1)']
                  }
              },
              splitLine: {
                  lineStyle: {
                      color: ['#eee']
                  }
              }
          },
          textStyle: {
              fontFamily: 'Arial, Verdana, sans-serif'
          }
      };

      var echartBar = echarts.init(document.getElementById('mainb'), theme);

      echartBar.setOption({
        title: {
          text: 'Punto de Equilibrio',
          subtext: 'Dinero Total'
        },
        tooltip: {
          trigger: 'axis'
        },
        legend: {
          data: ['Vivientes', 'Pagados']
        },
        toolbox: {
          show: false
        },
        calculable: false,
        xAxis: [{
          type: 'category',
          data: ['Total Recaudado']
        }],
        yAxis: [{
          type: 'value'
        }],
        series: [{
          name: 'Vivientes',
          type: 'bar',
          data: [18000],
          markLine: {
            data: [{
              type: 'average',
              name: 'Punto de Equilibrio'
            }]
          }
        }, {
          name: 'Pagados',
          type: 'bar',
          data: [13000],
          markLine: {
            data: [{
              type: 'average',
              name: 'Total Pagado'
            }]
          }
        }]
      });

    </script>
    <!-- Social Activity chart moris js -->
    <script src="../../CONTROLLER/JS/moris/raphael-min.js"></script>
    <script src="../../CONTROLLER/JS/moris/morris.js"></script>
    <script>
        $(function () {
            Morris.Bar({
            element: 'placeholder3xx3',
            data: [
                {Cotizaciones: 'Gastos Fijos', total: 21432},
                {Cotizaciones: 'Cocina', total: 5300},
                {Cotizaciones: 'Back', total: 2000},
                {Cotizaciones: 'Operativo', total: 1400},
                {Cotizaciones: 'Paramedico', total: 800},
            ],
            xkey: 'Cotizaciones',
            ykeys: ['total'],
            labels: ['Total $'],
            barRatio: 0.4,

            barColors: function (row, series, type) {
                            //console.log("--> "+row.label, series, type);
                            if(row.label == "Gastos Fijos") return "#758AB7";
                            else if(row.label == "Cocina") return "#758AB7";
                            else if(row.label == "Back") return "#88C5F3";
                            else if(row.label == "Operativo") return "#88C5F3";
                            else if(row.label == "Paramedico") return "#FF7064";
                        },
            xLabelAngle: 20,
            hideHover: 'auto',
            resize : true,
            redraw: true
        });
    });
    </script>
    <!-- /Social Activity chart moris js -->

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
    <!-- popup js -->
    <script src="../../CONTROLLER/JS/Avgrund/jquery.avgrund.js"></script>
    <script src="../../CONTROLLER/JS/Avgrund/jquery.avgrund.min.js"></script>
    <script>
    $(function() {
        $('#vivientesPagados').avgrund({
            width: 640, // max is 640px
            height: 350, // max is 350px
            closeByEscape: true, // enables closing popup by 'Esc'..
            showClose: true,
            showCloseText: 'Close',
            holderClass: 'vivientesPagados',
            enableStackAnimation: true,
            onBlurContainer: '.container',
            template: 
        });
    });
    </script>
</body>

</html>
<?php

  }else{
    header("Location: ../../index.php");
  }
?>