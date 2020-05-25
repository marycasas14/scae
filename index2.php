<?php


  session_start();
  if(isset($_SESSION['id'])){
    header('location: controller/redirec.php');
  }

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login en PHP</title>
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.css">


    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/sweetalert.css">
    <link rel="stylesheet" href="css/style.css">


     <!--- basic page needs
   ================================================== -->
    <meta charset="utf-8">
    <title>SCAE</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
   ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
   ================================================== -->
    
    <!-- script
   ================================================== -->
    <script src="js/modernizr.js"></script>
    <script src="js/pace.min.js"></script>

    <!-- favicons
  ================================================== -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">


  </head>
  

  <body id="top">

    <!-- header 
   ================================================== -->
   <header id="header" class="row">   

      <div class="header-logo">
      <a href="index.html">SCAE</a>
      </div>
  <nav id="header-nav-wrap">
  <a class="header-menu-toggle" href="#"><span>Menu</span></a>      
  </header> 

   <!-- home
   ================================================== -->
   <section id="home" data-parallax="scroll" data-image-src="images/fff.jpg" data-natural-width=2500 data-natural-height=2000>
  
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
    <div class="row">
    <div class="col-xs-12 col-md-4 col-md-offset-4">
    <center><h1 data-aos="fade-up" style="color: black;">B I E N V E N I D O </h1>
    <fieldset>
    <legend class="center" style="font-size: 23px; color: black; font-family: serif;">Login</legend>

    <label class="sr-only" for="user">Usuario</label>
    <div class="input-group">
    <div class="input-group-addon"><i class="fa fa-user"></i></div>
    <input type="text"  style="background-color:white;border-width:thin;border-style:solid;border-color:gray; " class="form-control" id="user" placeholder="Ingresa tu usuario" autocomplete="off">
    </div>

        <div class="spacing-2"></div>
        

    <label class="sr-only" for="clave">Contraseña</label>
    <div class="input-group">
    <div class="input-group-addon"><i class="fa fa-lock"></i></div>
    <input type="password"  style="background-color:white;border-width:thin;border-style:solid;border-color:gray;" autocomplete="off" class="form-control" id="clave" placeholder="Ingresa tu contraseña">
    </div>

     
    <div class="row" id="load" hidden="hidden">
    <div class="col-xs-4 col-xs-offset-4 col-md-2 col-md-offset-5">
    <img src="img/load.gif" width="100%" alt="">
    </div>
    <div class="col-xs-12 center text-accent">
    <span>Validando información...</span>
    </div>
    </div>


    <div class="row">
    <div class="col-xs-8 col-xs-offset-2">
    <div class="spacing-2"></div>
    <button type="button" class="btn btn-primary btn-block" name="button" id="login">Iniciar sesion</button>
    </div>
    </div>

    <section class="text-accent center">
    <div class="spacing-2"></div>  
    <label style="color: white; font-size: 20px;">No tienes una cuenta?</label> <a href="registro.php" style="color: white; font-size: 20px;"> Registrate!</a>
    </section>
   
    </section>
    </center>


    </fieldset>
    </div>
    </div>
    </div>
    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/sweetalert.min.js"></script>
    <script src="js/operaciones.js"></script>
  </body>
</html>
