
<?php 
if (isset($_POST['guardar'])) {
   include('con_db.php');

    
    $nunombre = $_FILES['nuarchivo']['name'];
    $nuruta = $_FILES['nuarchivo']['tmp_name'];
    $nudestino = "../admin/archivos_p/". $nunombre;
   
    $id_profesor=$_POST['id_profesor'];
    $nunombre_p= $_POST['nunombre'];
    $nutelefono= $_POST['nutelefono'];
    $nudireccion= $_POST['nudireccion'];

    $busca_p=mysqli_query($conex,"SELECT  * FROM profesor where id_profesor='$id_profesor'");
    $resbusca= mysqli_fetch_array($busca_p);
    $nombre_original=$resbusca['nombre_p'];
    $telefono_original=$resbusca['telefono'];
    $direccion_original=$resbusca['direccion'];
    $documentos_original=$resbusca['documentos'];


  if(empty($nunombre_p))
  {

  }else
  {

    if ($nunombre_p != $nombre_original) {

    	$nuevonombre="UPDATE profesor SET nombre_p='$nunombre_p' where id_profesor='$id_profesor'";
    	$q1=mysqli_query($conex,$nuevonombre);

    }
}



     if(empty($nutelefono))
     {

     }else
     {


    if ($nutelefono != $telefono_original)
     {
     	$nuevotelefono="UPDATE profesor SET telefono='$nutelefono' where id_profesor='$id_profesor'";
        $q2=mysqli_query($conex,$nuevotelefono);
    }


   }
	
      
      if(empty($nudireccion))
      {

      }else
      {
 

     if ($nudireccion != $direccion_original)
     {
      $nuevadireccion="UPDATE profesor SET direccion='$nudireccion' where id_profesor='$id_profesor'";
      $q3=mysqli_query($conex,$nuevadireccion);
     }
     }

       if(empty($nunombre))

       {

       }else{


 
      if ($nunombre != $documentos_original)
       {
        $nuevodocumento="UPDATE profesor SET documentos='$nunombre' where id_profesor='$id_profesor'";
        copy($nuruta,$nudestino);
        $q4=mysqli_query($conex,$nuevodocumento);

                    
         }
    

       }





}


?>