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
    <meta name="description" content="Pagina de Vivientes de Dashboard Campamento Nueva Especie">
    <meta name="author" content="Carlos Gonzalez">
    <link rel="icon" href="../../../IMG/lxmlogo.png">

    <title>Vivientes de Campamento Nueva Especie</title>

    <!-- Bootstrap core CSS -->

    <link href="../../../CSS/bootstrap.min.css" rel="stylesheet">

    <link href="../../../FONTS/css/font-awesome.min.css" rel="stylesheet">
    <link href="../../../CSS/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="../../../CSS/custom.css" rel="stylesheet">
    <link href="../../../CSS/icheck/flat/green.css" rel="stylesheet" />
    <!-- Datatables -->
    <link href="../../../../CONTROLLER/JS/datatables/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../../../../CONTROLLER/JS/datatables/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../../../../CONTROLLER/JS/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../../../../CONTROLLER/JS/datatables/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../../../../CONTROLLER/JS/datatables/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Select2 -->
    <link href="../../../CSS/select/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="../../../CSS/switchery/switchery.min.css" rel="stylesheet">

    <script src="../../../../CONTROLLER/JS/jquery.min.js"></script>

</head>

<body class="nav-md">

    <div class="container body">
        <div class="main_container">

            <div class="col-md-3 left_col menu_fixed">
                <div class="left_col scroll-view">

                    <!--Titulo del app-->
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="index.php" class="site_title"><img id="mainIcon" style="width:30px;height:30px" src="../../../IMG/lxmlogo.png" alt="Logo Latiendo Por Mexico">
                            <span>Nueva Especie</span>
                        </a>
                    </div>
                    <div class="clearfix"></div>
                    <!--/Titulo del app-->

                    <!-- menu prile quick info -->
                    <div class="profile">
                        <div class="profile_pic">
                            <img src="../../../IMG/profile<?php echo $_SESSION['usuario'];?>.jpg" alt="..." class="img-circle profile_img">
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
                                <li>
                                    <a href="../../">
                                        <i class="fa fa-bar-chart"></i>
                                        Dashboard
                                    </a>
                                </li>
                                <li class="active"><a><i class="fa fa-users"></i>Vivientes <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="../../VIVIENTES/index.php">Vivientes</a>
                                        </li>
                                        <li><a href="../FAMILIARES/index.php">Familiares</a>
                                        </li>
                                        <li><a href="#">Palancas</a>
                                        </li>
                                        <li><a href="../ENCUESTA/index.php">Encuesta</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-star"></i>Staff <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="../../STAFF/index.php">Miembros</a>
                                        </li>
                                        <li><a href="../../STAFF/STAFFASISTENTES/index.php">Campamento Actual</a>
                                        </li>
                                        <li><a href="../../STAFF/ASISTENCIAS/index.php">Asistencias</a>
                                        </li>
                                        <li><a href="../../STAFF/PAGOSTAFF/index.php">Pagos</a>
                                        </li>
                                        <li><a href="../../STAFF/VEHICULOSTAFF/index.php">Vehiculos</a>
                                        </li>
                                        <li><a href="../../STAFF/HISTORIAL/index.php">Historial</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-bank"></i>Administrativo <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="../../ADMINISTRATIVO/INGRESOSEGRESOS/index.php">Ingresos/Egresos</a>
                                        </li>
                                        <li><a href="../../ADMINISTRATIVO/GASTOSFIJOS/index.php">Gastos Fijos</a>
                                        </li>
                                        <li><a href="../../ADMINISTRATIVO/OPERATIVO/index.php">Operativo</a>
                                        </li>
                                        <li><a href="../../ADMINISTRATIVO/COCINA/index.php">Cocina</a>
                                        </li>
                                        <li><a href="../../ADMINISTRATIVO/INVENTARIOBACK/index.php">Inventario Back</a>
                                        </li>
                                        <li><a href="../../ADMINISTRATIVO/PARAMEDICO/index.php">Paramedico</a>
                                        </li>
                                        <li><a href="../../ADMINISTRATIVO/PROVEEDORES/index.php">Proveedores</a>
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
                    <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="Settings" style="color: #6A6D6D;">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="FullScreen" onclick="toggleFullScreen(document.body)" style="color: #6A6D6D;">
                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Lock" style="color: #6A6D6D;">
                            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Logout" style="color: #6A6D6D;" href="../../../../">
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
                                    <img src="../../../IMG/profile<?php echo $_SESSION['usuario'];?>.jpg" alt=""><?php echo $_SESSION['nombre'];?>
                                    <span class=" fa fa-angle-down"></span>
                                </a>

                                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                                    <li>
                                        <a href="../../../../"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        
                    </nav>
                </div>

            </div>
            <!-- /top navigation -->


            <!-- page content -->
            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3> Palancas <small> palancas de Vivientes</small></h3>
                        </div>
                    </div>
                    <!-- Table -->
                    
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Table de palancas <small></small></h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <p class="text-muted font-13 m-b-30">
                                    </p>
                                    <table id="datatable-buttons" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Genero</th>
                                                <th>Nombre</th>
                                                <th>Apellido</th>
                                                <th>Edad</th>
                                                <th>Telefono</th>
                                                <th>Celular</th>
                                                <th>Correo</th>
                                                <th>Gaia</th>
                                                <th>Pagado</th>
                                                <th>Carta Responsabilidad</th>
                                                <th>Carta Seguro</th>
                                                <th>Observaciones</th>
                                            </tr>
                                        </thead>
                                        <?php
                                            require "../../../../MODEL/connect.php";
                                            $data = $db->query("SELECT * FROM viviente ORDER BY idViviente");
                                            $vivientes = array();
                                            while($object = mysqli_fetch_object($data)){
                                                $vivientes[]=$object;
                                            }
                                            $tableString = "<tbody>";
                                            foreach ($vivientes as $viviente) {
                                                $tableString.= "<tr>";
                                                $tableString.= "<td>".$viviente->sexo."</td>";
                                                $tableString.= "<td>".$viviente->nombre."</td>";
                                                $tableString.= "<td>".$viviente->apellidoPaterno." ".$viviente->apellidoMaterno."</td>";
                                                $tableString.= "<td>";
                                                if(!empty($viviente->fechaNacimiento) || $viviente->fechaNacimiento != null){
                                                    $birthDate = $viviente->fechaNacimiento;
                                                    $birthDate = explode("-", $birthDate);
                                                    $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[2], $birthDate[1], $birthDate[0]))) > date("md")? ((date("Y") - $birthDate[0]) - 1): (date("Y") - $birthDate[0]));
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
                                                $tableString.= "</tr>";
                                            }
                                            $tableString.= "</tbody>";
                                            echo $tableString;
                                        ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-xs-12">   
                            <!-- FORM de Viviente -->
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Registrar Viviente<small></small></h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">

                                    <!-- start form for validation -->
                                    <form action="../../../CONTROLLER/altaViviente.php" method="POST" name="altaViviente" id="demo-form" data-parsley-validate>
                                        <label for="fullname">Nombre * :</label>
                                        <input type="text" id="nombre" class="form-control" name="nombre" required />

                                        <label for="fullname">Apellido Paterno * :</label>
                                        <input type="text" id="apellidoPaterno" class="form-control" name="apellidoPaterno" required />

                                        <label for="fullname">Apellido Materno * :</label>
                                        <input type="text" id="apellidoMaterno" class="form-control" name="apellidoMaterno" required />

                                        <label for="email">Correo * :</label>
                                        <input type="email" id="correo" class="form-control" name="correo" data-parsley-trigger="change" required />

                                        <label>Genero *:</label>
                                        <p>
                                            M: <input type="radio" class="flat" name="genero" id="genderM" value="M" checked="" required /> 
                                            F: <input type="radio" class="flat" name="genero" id="genderF" value="F" />
                                        </p>                          

                                        <label for="message">Observaciones (20 chars min, 250 max) :</label>
                                        <textarea id="observaciones" required="required" class="form-control" name="observaciones" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="250" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                                        data-parsley-validation-threshold="10"></textarea>

                                        <br/>
                                        <input type="submit" name="submit" value="Submit" class="btn btn-primary" />
                                    </form>
                                    <!-- end form for validations -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12"> 
                            <!-- FORM de Viviente -->
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Subir Excel Vivientes a  Base de Datos</h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <p>Slecciona o arrastra el archivo de excel para subir a la base de datos</p>
                                    <form  action="../../../CONTROLLER/subirExcelViviente.php" name="import" method="POST" enctype="multipart/form-data">
                                        <input type="file" name="file" /><br />
                                        <input type="submit" name="submit" value="Submit" class="btn btn-primary" />
                                    </form>
                                    <br />
                                    <br />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12"> 
                            <!-- FORM de Viviente -->
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Subir Excel Completo a  Base de Datos</h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <p>Slecciona o arrastra el archivo de excel para subir a la base de datos</p>
                                    <form  action="index.php"name="import" method="POST" enctype="multipart/form-data">
                                        <input type="file" name="file" /><br />
                                        <input type="submit" name="submit" value="Submit" class="btn btn-primary"/>
                                    </form>
                                    <br />
                                    <br />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
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

    <script src="../../../../CONTROLLER/JS/bootstrap.min.js"></script>

    <!-- chart js -->
    <script src="../../../../CONTROLLER/JS/chartjs/chart.min.js"></script>
    <!-- bootstrap progress js -->
    <script src="../../../../CONTROLLER/JS/progressbar/bootstrap-progressbar.min.js"></script>
    <script src="../../../../CONTROLLER/JS/nicescroll/jquery.nicescroll.min.js"></script>
    <!-- icheck -->
    <script src="../../../../CONTROLLER/JS/icheck/icheck.min.js"></script>
    <!-- gauge js -->
    <script type="text/javascript" src="../../../../CONTROLLER/JS/gauge/gauge.min.js"></script>
    <!-- daterangepicker -->
    <script type="text/javascript" src="../../../../CONTROLLER/JS/moment/moment.min2.js"></script>
    <script type="text/javascript" src="../../../../CONTROLLER/JS/datepicker/daterangepicker.js"></script>
    <!-- Dropzone.js -->
    <script src="../../../../CONTROLLER/JS/dropzone/dropzone.js"></script>



    <script src="../../../../CONTROLLER/JS/custom.js"></script>


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

    <!-- DATATABLES -->
    <script src="../../../../CONTROLLER/JS/datatables/jquery.dataTables.min.js"></script>
    <script src="../../../../CONTROLLER/JS/datatables/dataTables.bootstrap.js"></script>*
    <script src="../../../../CONTROLLER/JS/datatables/dataTables.buttons.min.js"></script>
    <script src="../../../../CONTROLLER/JS/datatables/buttons.bootstrap.min.js"></script>
    <script src="../../../../CONTROLLER/JS/datatables/buttons.flash.min.js"></script>*
    <script src="../../../../CONTROLLER/JS/datatables/buttons.html5.min.js"></script>
    <script src="../../../../CONTROLLER/JS/datatables/buttons.print.min.js"></script>
    <script src="../../../../CONTROLLER/JS/datatables/dataTables.fixedHeader.min.js"></script>
    <script src="../../../../CONTROLLER/JS/datatables/dataTables.keyTable.min.js"></script>
    <script src="../../../../CONTROLLER/JS/datatables/dataTables.responsive.min.js"></script>
    <script src="../../../../CONTROLLER/JS/datatables/responsive.bootstrap.min.js"></script>*
    <script src="../../../../CONTROLLER/JS/datatables/datatables.scroller.min.js"></script>
    <script src="../../../../CONTROLLER/JS/datatables/jszip.min.js"></script>
    <script src="../../../../CONTROLLER/JS/datatables/pdfmake.min.js"></script>
    <script src="../../../../CONTROLLER/JS/datatables/vfs_fonts.js"></script>
    <script>
      $(document).ready(function() {
        var handleDataTableButtons = function() {
          if ($("#datatable-buttons").length) {
            $("#datatable-buttons").DataTable({
              dom: "Bfrtip",
              keys: true,
              buttons: [
                {
                  extend: "copy",
                  className: "btn-sm"
                },
                {
                  extend: "csv",
                  className: "btn-sm"
                },
                {
                  extend: "excel",
                  className: "btn-sm"
                },
                {
                  extend: "pdfHtml5",
                  className: "btn-sm"
                },
                {
                  extend: "print",
                  className: "btn-sm"
                },
              ],
              responsive: true
            });
          }
        };

        TableManageButtons = function() {
          "use strict";
          return {
            init: function() {
              handleDataTableButtons();
            }
          };
        }();

        TableManageButtons.init();
      });
    </script>
    <script type="text/javascript">
        var editor; // use a global for the submit and return data rendering in the examples
 
        $(document).ready(function() {
            editor = new $.fn.dataTable.Editor( {
                ajax: "../php/staff.php",
                table: "#example",
                fields: [ {
                        label: "First name:",
                        name: "first_name"
                    }, {
                        label: "Last name:",
                        name: "last_name"
                    }, {
                        label: "Position:",
                        name: "position"
                    }, {
                        label: "Office:",
                        name: "office"
                    }, {
                        label: "Extension:",
                        name: "extn"
                    }, {
                        label: "Start date:",
                        name: "start_date",
                        type: "datetime"
                    }, {
                        label: "Salary:",
                        name: "salary"
                    }
                ]
            } );
         
            $('#example').DataTable( {
                dom: "Bfrtip",
                ajax: "../php/staff.php",
                columns: [
                    { data: null, render: function ( data, type, row ) {
                        // Combine the first and last names into a single table field
                        return data.first_name+' '+data.last_name;
                    } },
                    { data: "position" },
                    { data: "office" },
                    { data: "extn" },
                    { data: "start_date" },
                    { data: "salary", render: $.fn.dataTable.render.number( ',', '.', 0, '$' ) }
                ],
                select: true,
                buttons: [
                    { extend: "create", editor: editor },
                    { extend: "edit",   editor: editor },
                    { extend: "remove", editor: editor }
                ]
            } );
        } );
    </script>

    <!-- /DATATABLES -->

    <!-- Parsley -->
    <script src="../../../../CONTROLLER/JS/parsley/parsley.min.js"></script>
    <script>
      $(document).ready(function() {
        $.listen('parsley:field:validate', function() {
          validateFront();
        });
        $('#demo-form .btn').on('click', function() {
          $('#demo-form').parsley().validate();
          validateFront();
        });
        var validateFront = function() {
          if (true === $('#demo-form').parsley().isValid()) {
            $('.bs-callout-info').removeClass('hidden');
            $('.bs-callout-warning').addClass('hidden');
          } else {
            $('.bs-callout-info').addClass('hidden');
            $('.bs-callout-warning').removeClass('hidden');
          }
        };
      });

      try {
        hljs.initHighlightingOnLoad();
      } catch (err) {}
    </script>
    <!-- /Parsley -->


</body>

</html>
<?php

  }else{
    header("Location: ../../../../index.php");
  }
?>