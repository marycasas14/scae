
<?php
include('con_db.php');
if (isset($_POST['falta'])) {

 	$alumno=$_POST['alumno'];
    $fecha=$_POST['fecha'];
    $cve_act=$_POST['cve_act'];

 
    

    $encontrar=mysqli_query($conex,"SELECT  boleta FROM alumno where nombre='$alumno'");
    $r= mysqli_fetch_array($encontrar);
    $boleta=$r['boleta'];


    $VERIFICAR=mysqli_query($conex,"SELECT boleta from asistencia where boleta='$boleta' and fecha='$fecha'");
    $ver=mysqli_num_rows($VERIFICAR);

    if ($ver > 0) {
    	echo "este usuario ya tiene Asistencia";
    
    }else
    {

    $resultado=0;
    $asistencias=0;
    $ingresar=mysqli_query($conex,"INSERT INTO asistencia(boleta,fecha,faltas,asistencia,cve_act) values ('$boleta','$fecha','$resultado','$asistencias','$cve_act')");


    $encontrarfaltas=mysqli_query($conex,"SELECT faltas  FROM asistencia where boleta='$boleta' AND fecha='$fecha'");
    $rfaltas= mysqli_fetch_array($encontrarfaltas);
    $faltas=$rfaltas['faltas'];
    $resultado=($faltas+1);
    

     $agregarfalta=mysqli_query($conex,"UPDATE asistencia SET faltas='$resultado' where boleta='$boleta' and fecha='$fecha'");

     if ($agregarfalta) {
        echo "correcto";
     }
      
    }


}



if (isset($_POST['falta'])) {

    $alumno=$_POST['alumno'];
    $fecha=$_POST['fecha'];
    $cve_act=$_POST['cve_act'];

 
    

    $encontrar=mysqli_query($conex,"SELECT  boleta FROM alumno where nombre='$alumno'");
    $r= mysqli_fetch_array($encontrar);
    $boleta=$r['boleta'];


    $VERIFICAR=mysqli_query($conex,"SELECT boleta from asistencia where boleta='$boleta' and fecha='$fecha'");
    $ver=mysqli_num_rows($VERIFICAR);

    if ($ver > 0) {
        echo "este usuario ya tiene Asistencia";
    
    }else
    {

    $resultado=0;
    $asistencias=0;
    $ingresar=mysqli_query($conex,"INSERT INTO asistencia(boleta,fecha,faltas,asistencia,cve_act) values ('$boleta','$fecha','$resultado','$asistencias','$cve_act')");


    $encontrarfaltas=mysqli_query($conex,"SELECT faltas  FROM asistencia where boleta='$boleta' AND fecha='$fecha'");
    $rfaltas= mysqli_fetch_array($encontrarfaltas);
    $faltas=$rfaltas['faltas'];
    $resultado=($faltas+1);
    

     $agregarfalta=mysqli_query($conex,"UPDATE asistencia SET faltas='$resultado' where boleta='$boleta' and fecha='$fecha'");

     if ($agregarfalta) {
        echo "Realizado";
     }
      
    }


}


if (isset($_POST['asistencia'])) {

    $alumno=$_POST['alumno'];
    $fecha=$_POST['fecha'];
    $cve_act=$_POST['cve_act'];
    $horas=$_POST['horas'];

 
    

    $encontrar=mysqli_query($conex,"SELECT  boleta FROM alumno where nombre='$alumno'");
    $r= mysqli_fetch_array($encontrar);
    $boleta=$r['boleta'];


    $VERIFICAR=mysqli_query($conex,"SELECT boleta from asistencia where boleta='$boleta' and fecha='$fecha'");
    $ver=mysqli_num_rows($VERIFICAR);

    if ($ver > 0) {
        echo "este usuario ya tiene Asistencia";
    
    }else
    {

    $resultado=0;

    $ingresar=mysqli_query($conex,"INSERT INTO asistencia(boleta,fecha,faltas,asistencia,cve_act) values ('$boleta','$fecha','$resultado','$horas','$cve_act')");


     if ($ingresar) {


        $sumar=mysqli_query($conex,"SELECT  horas FROM alumno_actividad where cve_act='$cve_act' and boleta='$boleta'");
        $suma= mysqli_fetch_array($sumar);
        $horast=$suma['horas'];

        $horastotales=($horas+$horast);



         $agregarhoras=mysqli_query($conex,"UPDATE alumno_actividad SET horas='$horastotales' where boleta='$boleta' and cve_act='$cve_act'");

     if ($agregarhoras) {

        $AGREGAR=mysqli_query($conex,"SELECT horas_t FROM alumno where boleta='$boleta'");
        $su= mysqli_fetch_array($AGREGAR);
        $sures=$su['horas_t'];

        $totales=($sures+$horastotales);

         $agregarhorast=mysqli_query($conex,"UPDATE alumno SET horas_t='$totales' where boleta='$boleta'");

         if ($agregarhorast) {

            $creditos=mysqli_query($conex,"SELECT horas_por_credito FROM actividad where cve_act='$cve_act'");
            $cred= mysqli_fetch_array($creditos);
            $rescred=$cred['horas_por_credito'];


            $electivas=($totales/$rescred);

            $agregarelec=mysqli_query($conex,"UPDATE alumno SET electivas='$electivas' where boleta='$boleta'");
            if ($agregarelec) {
                
                echo "correcto";

            }



     
            
         }




        




     }
      
     }
      
    }


}








    ?>
 