<?php
  
   
   if (isset($_POST['Notificar'])){

    
   include("con_db.php");
    $boleta= $_POST['boletac'];
    $nombre = $_POST["nombrec"];
    $correo = $_POST["email"];
    $mensaje=$_POST["mensaje"];
    $contenido = $nombre . "\n". "\n ".$mensaje ;
   
     $emisor="marycasasas5@gmail.com";
     $nombrecorreo="Departamento de Electivas";


               
                 
         $headers  = "MIME-Version: 1.0\r\n";
         $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

        //dirección del remitente
         $headers .= "From: ".$nombrecorreo." <".$emisor.">\r\n";

        //Una Dirección de respuesta, si queremos que sea distinta que la del remitente
        $headers .= "Reply-To: ".$emisor."\r\n";

        if(mail($correo,"Solicitud Rechazada",$contenido,$headers)){
               
         echo "<script>alert(' Solicitud Rechazada');</script>";
         $q3="DELETE FROM solicitud where boleta='$boleta'";
         $sq3=mysqli_query($conex,$q3);

       header("location: estados.php");
      }else{
        echo "<script>alert('No se pudo enviar el mail, por favor verifique su configuracion de correo SMTP saliente.');</script>";
      }



    
    
}

    ?>