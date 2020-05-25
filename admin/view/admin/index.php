<?php
  // Se prendio esta mrd :v
  session_start();

  if(!isset($_SESSION['cargo']) || $_SESSION['cargo'] != 1){
    header('location: ../../index.php');
  }

?>

<a href="../../controller/cerrarSesion.php">
      <button type="button" name="button">Cerrar sesion</button>
    </a>

<!DOCTYPE html>
<!--[if lt IE 9 ]><html class="no-js oldie" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>

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
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.css">

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
      <ul class="header-main-nav">
        <li class="current"><a class="smoothscroll"  href="#home" title="home">INICIO</a></li>
                <li><a class="smoothscroll"  href="#about" title="about">AYUDA</a></li>
        <li><a class="smoothscroll"  href="#download" title="download">CONTACTO</a></li>  
      </ul>
    </nav>

    <a class="header-menu-toggle" href="#"><span>Menu</span></a>      
    
   </header> <!-- /header -->


   <!-- home
   ================================================== -->
   <section id="home" data-parallax="scroll" data-image-src="images/fff.jpg" data-natural-width=2500 data-natural-height=2000>

        <div class="overlay"></div>
        <div class="home-content">        

            <div class="row contents">                     
                <div class="home-content-left">

                    <h3 data-aos="fade-up">B I E N V E N I D O </h3>

                    <h1 data-aos="fade-up">
                        Sistema de Control de
                        Actividades Estudiantiles <br>
                        
                    </h1>

                    <div class="buttons" data-aos="fade-up">
                        <a href="http://localhost/scae/alumno/index.php" class="button stroke">ALUMNO</a>
                        
                            
                        <a href="http://localhost/scae/profesor/index2.php" class="button stroke">PROFESOR</a>
                    
                    </div>                                         

                </div>

                <div class="home-image-right">
                    <img src="images/us.png" 
                        srcset="images/us.png 1x, images/us.png 2x"  
                        data-aos="fade-up">
                </div>
            </div>

        </div> <!-- end home-content -->

        <ul class="home-social-list">
            <li>
                <a href="#"><i class="fa fa-facebook-square"></i></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-twitter"></i></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-instagram"></i></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-youtube-play"></i></a>
            </li>
        </ul>
        <!-- end home-social-list -->

        <div class="home-scrolldown">
            <a href="#about" class="scroll-icon smoothscroll">
                <span>Scroll Down</span>
                <i class="icon-arrow-right" aria-hidden="true"></i>
            </a>
        </div>

    </section> <!-- end home -->  


    ================================================== -->

    <div id="preloader"> 
      <div id="loader"></div>
    </div>  

    <!-- Java Script
    ================================================== -->
    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

</body>

</html>
