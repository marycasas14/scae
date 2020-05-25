<?php 
include("con_db.php");

  if (isset($_POST['rechazar'])){

     
          $folio=trim($_POST['folio']);
          $boleta=trim($_POST['boleta']); 
          $cve_act=trim($_POST['taller']);
          $nombre = trim($_POST['nombre']); 
          $edad=  trim($_POST['edad']);
          $genero=trim($_POST['genero']);
          $carrera=trim($_POST['carrera']);
          $semestre=trim($_POST['semestre']);
          $correo=trim($_POST['correo']);    
          $telefono=trim($_POST['telefono']);    
          $domicilio=trim($_POST['domicilio']);
          $contacto = trim($_POST['contacto']); 
          $taller=  trim($_POST['taller']);
    
       ?>

       <!DOCTYPE html>
       <html>
       <head>
       <title>Solicitud Rechazada</title>
       </head>
       <body>
       <form id="contactform" action="correo.php" name="contactform" method="POST">
       <fieldset>
        <div>
            <input type="text" name="nombrec" value="<?php echo $nombre; ?>" >
        </div> 

        <div>
            <input type="text" name="boletac" value="<?php echo $boleta; ?>">
        </div>
        
        <div>
            <input type="text" name="email" value="<?php echo $correo; ?>">
        </div>
        
        <div>
            <textarea class="form-control" name="mensaje" id="comments" rows="6"></textarea>
        </div>
        <input type="submit" name="Notificar" value="Notificar_Rechazo">
        </fieldset>
          </form>
         </body>
         </html>

        <?php

    
  } else{

    if (isset($_POST['aceptar'])){

          $folio=trim($_POST['folio']);
    	    $boleta=trim($_POST['boleta']); 
          $cve_act=trim($_POST['taller']);
          $nombre = trim($_POST['nombre']);
          $edad=  trim($_POST['edad']);
          $genero=trim($_POST['genero']);
          $carrera=trim($_POST['carrera']);
          $semestre=trim($_POST['semestre']);
          $correo=trim($_POST['correo']);    
          $telefono=trim($_POST['telefono']);    
          $domicilio=trim($_POST['domicilio']);
          $contacto = trim($_POST['contacto']); 
           

              $qu=mysqli_query($conex,"SELECT  documentos FROM Solicitud where folio='$folio'");
              $res= mysqli_fetch_array($qu);
              $doc=$res['documentos'];

                $q2="INSERT INTO alumno(boleta,nombre,edad,genero,carrera,semestre,correo,telefono,domicilio,contacto,documentos) values('$boleta','$nombre','$edad','$genero','$carrera','$semestre','$correo','$telefono','$domicilio','$contacto','$doc')";
                $sq2=mysqli_query($conex,$q2);
      
             
               $q="INSERT INTO alumno_actividad(cve_act,boleta) values('$cve_act','$boleta')";
               $sq=mysqli_query($conex,$q); 



             
               $contenido = $nombre ."\n\n". "\n\n\n Su solicitud fue Aceptada presentece a su actividad en el horario indicado" ;
             
               $emisor="marycasasas5@gmail.com";
               $nombrecorreo="Departamento de Electivas";




               
                 
                $headers  = "MIME-Version: 1.0\r\n";
                $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

               $headers .= "From: ".$nombrecorreo." <".$emisor.">\r\n";

               $headers .= "Reply-To: ".$emisor."\r\n";

              if(mail($correo,"Solicitud aceptada",$contenido,$headers)){
              $q3="DELETE FROM solicitud where folio='$folio'";
              $sq3=mysqli_query($conex,$q3);
               
              echo "<script>alert(' Solicitud Aceptada');</script>";
              header("location: estados.php");
             }else{
             echo "<script>alert('error');</script>";
             header("location: estados.php");
             }  

                 
               
               
}
}
         

          

 ?>
