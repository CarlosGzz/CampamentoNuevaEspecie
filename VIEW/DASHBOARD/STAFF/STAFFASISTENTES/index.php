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
                                <li><a><i class="fa fa-users"></i>Vivientes <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="../../VIVIENTES/index.php">Vivientes</a>
                                        </li>
                                        <li><a href="../../VIVIENTES/FAMILIARES/index.php">Familiares</a>
                                        </li>
                                        <li><a href="../../VIVIENTES/PALANCAS/index.php">Palancas</a>
                                        </li>
                                        <li><a href="../../VIVIENTES/ENCUESTA/index.php">Encuesta</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-star"></i>Staff <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="../../STAFF/index.php">Miembros</a>
                                        </li>
                                        <li><a href="#">Campamento Actual</a>
                                        </li>
                                        <li><a href="../ASISTENCIAS/index.php">Asistencias</a>
                                        </li>
                                        <li><a href="../PAGOSTAFF/index.php">Pagos</a>
                                        </li>
                                        <li><a href="../VEHICULOSTAFF/index.php">Vehiculos</a>
                                        </li>
                                        <li><a href="../HISTORIAL/index.php">Historial</a>
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
                                                <a href='../../AdminSite'>
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
                        <a data-toggle="tooltip" data-placement="top" title="Logout" style="color: #6A6D6D;" href="../../../">
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
                            <h3> Staff Asistente <small>staff que asistira al campamento</small></h3>
                        </div>
                    </div>
                    <!-- Table -->
                    
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Tabla de Staff Asistente <small></small></h2>
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
                                                <th>Nombre</th>
                                                <th>Apellido</th>
                                                <th>Gaia</th>
                                                <th>Rol</th>
                                                <th>Pagado</th>
                                                <th>Vehiculo</th>
                                                <th>Correo</th>
                                                <th>Telefono Cel</th>
                                            </tr>
                                        </thead>
                                        <?php
                                            require "../../../../CONTROLLER/staffTablaAsistentes.php";
                                        ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel" >
                                <div class="x_title">
                                    <h2>Alta Staff a Campamento<small></small></h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="alert alert-danger" role="alert" id="mensajeStaffAsistente" style="display: none;"></div>
                                <div class="x_content">
                                    <br>
                                    <form id="staffFormAsistente" data-parsley-validate class="form-horizontal form-label-left" >
                                        <div class="form-group">
                                            <label for="staff" class="control-label col-md-3 col-sm-3 col-xs-12">
                                                Staff<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <select id="staff" class="form-control" required>
                                                    <?php
                                                        require "../../../../MODEL/connect.php";
                                                        $data = $db->query("SELECT s.idStaff, s.nombre, s.apellidoPaterno, s.apellidoMaterno FROM staff as s LEFT JOIN staffCampamento as sc ON s.idStaff =sc.idStaff   ORDER BY nombre");
                                                        $staff = array();
                                                        while($object = mysqli_fetch_object($data)){
                                                            $staff[]=$object;
                                                        }
                                                        $selectValues = "";
                                                        foreach ($staff as $staf) {
                                                            $selectValues.= "<option value=".$staf->idStaff." ";
                                                            $selectValues.= ">".$staf->nombre." ".$staf->apellidoPaterno." ".$staf->apellidoMaterno."</option>";
                                                        }
                                                        echo $selectValues;
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="asistir" class="control-label col-md-3 col-sm-3 col-xs-12">Asistir a Campamento</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="btn-group" data-toggle="buttons">
                                                    <p>
                                                        Si:
                                                        <input id="asistir" type="radio" class="flat" name="asistir" value="1" checked/> 
                                                        No:
                                                        <input id="asistir" type="radio" class="flat" name="asistir" value="2" />
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="staffRol" class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> 
                                                Rol
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" id="staffRol" name="staffRol" class="form-control col-md-7 col-xs-12" maxlength="45">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="staffPagado" class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> 
                                                Pagado
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" id="staffPagado" name="staffPagado" class="form-control col-md-7 col-xs-12" maxlength="45">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="vehiculoStaff" class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> 
                                                Vehiculo
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" id="vehiculoStaff" name="vehiculoStaff" class="form-control col-md-7 col-xs-12" maxlength="45">
                                            </div>
                                        </div>
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3 col-sm-offset-3">
                                                <button type="submit" class="btn btn-primary">Cancel</button>
                                                <button id="submitStaff" type="submit" class="btn btn-success">Submit</button>
                                            </div>
                                        </div>
                                    </form>
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
    <!-- bootstrap progress js -->
    <script src="../../../../CONTROLLER/JS/nicescroll/jquery.nicescroll.min.js"></script>
    <!-- icheck -->
    <script src="../../../../CONTROLLER/JS/icheck/icheck.min.js"></script>



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

    <!-- Script para dar de alta un lugar con ajax--> 
    <script type="text/javascript">
    $(document).ready(function(){
        $("#submitStaff").click(function(){
            var nombre = $("#staff").val();
            var asistir = $("#asistir").val();
            var staffRol = $("#staffRol").val();
            var staffPagado = $("#staffPagado").val();
            var vehiculoStaff = $("#vehiculoStaff").val();
            
            // Returns successful data submission message when the entered information is stored in database.
            if(nombre==''|| asistir=='' || apellidoMaterno=='') {
                //alert("Favor de llenar todos los campos");
            }else{
                // AJAX Code To Submit Form.
                if(asistir == 1)
                $.ajax({
                    url: "../../../CONTROLLER/encuestaStaff.php",
                    method: 'POST',
                    data: {nombre:nombre, apellidoPaterno:apellidoPaterno, apellidoMaterno:apellidoMaterno, genero:genero,fechaNacimiento:fechaNacimiento,carrera:carrera,universidad:universidad,gaia:gaia,rolDeseado:rolDeseado, pulsera:pulsera,correo:correo,telefonoCel:telefonoCel},
                    cache: false,
                    success: function(result){
                        if(result=='1'){
                            $('#mensajeStaffAsistente').empty(),
                            $('#mensajeStaffAsistente').show(),
                            $('#mensajeStaffAsistente').removeClass("alert alert-danger")
                            $('#mensajeStaffAsistente').addClass("alert alert-success"),
                            $('#mensajeStaffAsistente').html('<span aria-hidden="true"><i class="fa fa-check"></i></span>Muchas Gracias por llenar la Encuesta'),
                            $("#staffForm ").trigger("reset"),
                            $("#contenido").hide();
                            $("#tablaStaff").load(location.href + " #tablaStaff");
                        }else{
                            $('#mensajeStaffAsistente').empty(),
                            $('#mensajeStaffAsistente').removeClass("alert alert-success")
                            $('#mensajeStaffAsistente').addClass("alert alert-danger"),
                            $('#mensajeStaffAsistente').show(),
                            $('#mensajeStaffAsistente').html('<span aria-hidden="true"><i class="fa fa-close"></i></span> Error al hacer la encuesta ');
                        }
                        //alert(result)
                    }
                });
            }
            return false;
        });
    }); 
    </script>


</body>

</html>
<?php

  }else{
    header("Location: ../../../../index.php");
  }
?>