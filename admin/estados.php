<?php


  session_start();
  if(isset($_SESSION['id'])){
    header('location: controller/redirec.php');
  }

?>

   <html>
   <head>
   
   <link rel="stylesheet" href="css/base.css">
   <link rel="stylesheet" href="css/vendor.css">
   <link rel="stylesheet" href="css/main.css">



   <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
   <script src="jquery-3.2.1.min.js"></script>
   <script src="script.js"></script>
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
    <center><h1 data-aos="fade-up" style="color: black;">S O L I C I T U D E S</h1>
    <BR><h2><center>BOLETA </h2>
    <form action="visualizar_solicitud.php" method="post">
    <center><select name="boleta" class="contenedor2" style="background-color:white;border-width:thin;border-style:solid;border-color:gray; ">
                 <?php 
                        include 'con_db.php';
                        $query=mysqli_query($conex,"SELECT boleta  FROM solicitud");
                        while($datos = mysqli_fetch_array($query))
                        {
                    ?>
                            <option value="<?php echo $datos['boleta']?>"> <?php echo $datos['boleta']?> </option>
                    <?php
                        }
                    ?> 

   </select>

  <?php


     $query=mysqli_query($conex,"SELECT folio  FROM solicitud");
     $res=mysqli_num_rows($query);
     
     if ($res > 0) {

      ?>
      <center><input type="submit"class="btn btn-primary btn-block"  value="visualizar" name="visualizar"></div>
      <input type="button" class="btn btn-primary btn-block"  id="recarga" value="Actualizar" onclick="javascript:window-location.reload();">
      
     <?php
    }else{

      echo "No hay ninguna solicitud ";
     }
      ?>
   
   </form>
   </section>
   </center>
  
     

    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

    

    </body>
    </html>

