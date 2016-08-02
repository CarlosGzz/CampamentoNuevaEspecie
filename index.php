<?php
  //Index
  session_start();
  session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <!-- Meta, title, CSS, favicons, etc. -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="Pagina de Log in para Administrador Campamento Nueva Especie">
      <meta name="author" content="Carlos Gonzalez">
      <link rel="icon" href="VIEW/IMG/lxmlogo.png">

      <title>Login de Administrador Campamento Nueva Especie</title>

      <!-- Bootstrap core CSS -->

      <link href="VIEW/CSS/bootstrap.min.css" rel="stylesheet">
      <link href="VIEW/CSS/signin.css" rel="stylesheet">

      <!-- Custom styling plus plugins -->
      <link href="VIEW/CSS/custom.css" rel="stylesheet">
      <link href="VIEW/FONTS/css/font-awesome.min.css" rel="stylesheet">
      <script src="CONTROLLER/JS/jquery.min.js"></script>

   </head>

   <body style="background-image:url('VIEW/IMG/woods.jpg');">

      <div class="">
         <a class="hiddenanchor" id="tologin"></a>

         <div id="wrapper">
            <div id="login" class="animate form">
               <h1 class="login-block-h1" >Campamento Nueva Especie</h1>
               <section class="login_content">
                  <form action="CONTROLLER/login.php" method="POST" name="form">
                     <h1 style="color:white;">Login</h1>
                     <div class="alert alert-danger" role="alert" id="mensaje" style="display: none; margin: auto; width: 80%"></div>
                     <div>
                     <input type="text" class="form-control" placeholder="Username" id="user" name="user" onchange="validateChar(this)"  required="" />
                     </div>
                     <div>
                        <input type="password" class="form-control" placeholder="Password" id="pass" name="pass" onchange="validateChar(this)" required="" />
                     </div>
                     <div>
                        <button type="button" class="btn btn-default submit" id="envia">Log in</button>
                        <a class="reset_pass" href="#" style="color: #6A6D6D;">Lost your password?</a>
                     </div>
                     <div class="clearfix"></div>
                     <div class="separator"></div>
                  </form>
                  <!-- form -->
               </section>
               <!-- content -->
            </div>
         </div>
      </div>

     <script src="CONTROLLER/JS/loginOperations.js"></script>
     <script src="CONTROLLER/JS/validarInput.js"></script>
   </body>

</html>
