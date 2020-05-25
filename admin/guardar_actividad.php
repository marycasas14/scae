
<?php 
if (isset($_POST['guardar'])) {
   include('con_db.php');

    
    
   
    $nombre_act=$_POST['nombre_act'];
    $materiales= $_POST['materiales'];
    $cupo= $_POST['cupo'];
    $id_profesor= $_POST['id_profesor'];
    $creditos=$_POST['horas_por_credito'];

    

    if(empty($nombre_act) ||empty($materiales) ||empty($cupo)||empty($id_profesor)||empty($creditos)){
      echo "completa los campos";
  
  }else{

      $agregar="INSERT INTO actividad(nombre_act,materiales,cupo,id_profesor,horas_por_credito) values('$nombre_act','$materiales','$cupo','$id_profesor','$creditos')";
      $q=mysqli_query($conex,$agregar);
      if ($q) {
        echo "asignacion correcta";
      }else{
        echo "error";
      }
  }
  




}


?>