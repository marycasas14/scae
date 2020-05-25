<?php
if (isset($_POST['guardar'])) {

	include('con_db.php');

    $cve_act=$_POST['cve_act'];
    $dias= $_POST['dias'];
    $horario= $_POST['horario'];
    $ubicacion= $_POST['ubicacion'];

    $insertar=mysqli_query($conex,"INSERT INTO horarios(cve_act,Dias,Horas,Ubicacion) values ('$cve_act','$dias','$horario','$ubicacion')");
    if ($insertar) {

    	echo "Datos Guardados";
    }

}
    
?>