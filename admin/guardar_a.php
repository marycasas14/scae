
<?php 
if (isset($_POST['guardar'])) {
   include('con_db.php');

    $cve_act= $_POST['cve_act'];
    $nunombre_act= $_POST['nunombre'];
    $numateriales= $_POST['numateriales'];
    $nucupo= $_POST['nucupo'];
    $nuevo_profesor=$_POST['nuevo_profesor'];
    $creditos_nu=$_POST['creditos_nu'];



    
    $q="SELECT  * FROM actividad where cve_act='$cve_act'";
    $busca=mysqli_query($conex,$q);
    $resbusca= mysqli_fetch_array($busca);
    $nombre_original=$resbusca['nombre_act'];
    $materiales_original=$resbusca['materiales'];
    $cupo_original=$resbusca['cupo'];
    $id_original=$resbusca['id_profesor'];
    $creditos_original=$resbusca['horas_por_credito'];


    $q2="SELECT  id_profesor FROM profesor where nombre_p='$nuevo_profesor'";
    $busca_a=mysqli_query($conex,$q2);
    $resbusca= mysqli_fetch_array($busca_a);
    $nuevo_profesor=$resbusca['id_profesor'];
    


  if(empty($nunombre_act))
  {

  }else
  {

    if ($nunombre_act != $nombre_original) {

    	$nuevonombre="UPDATE actividad SET nombre_act='$nunombre_act' where cve_act='$cve_act'";
    	$q1=mysqli_query($conex,$nuevonombre);

    }
}



     if(empty($numateriales))
     {

     }else
     {


    if ($numateriales != $materiales_original)
     {
     	$nuevomateriales="UPDATE actividad SET materiales='$numateriales' where cve_act='$cve_act'";
        $q2=mysqli_query($conex,$nuevomateriales);

      
    }


   }
	
      
      if(empty($nucupo))
      {

      }else{
 

     if ($nucupo != $cupo_original)
     {
      $nuevacupo="UPDATE actividad SET cupo='$nucupo' where cve_act='$cve_act'";
      $q3=mysqli_query($conex,$nuevacupo);
     }
     }

       if(empty($nuevo_profesor))

       {

       }else{

 
      if ($id_original != $nuevo_profesor)
       {
        $nuevoprofesor="UPDATE actividad SET id_profesor='$nuevo_profesor' where cve_act='$cve_act'";
        $q4=mysqli_query($conex,$nuevoprofesor);

                    
         } }




          if(empty($creditos_nu))
          {

          }else{

            if ($creditos_original != $creditos_nu)
             {
              $nuevocredito="UPDATE actividad SET horas_por_credito='$creditos_nu' where cve_act='$cve_act'";
              $q5=mysqli_query($conex,$nuevocredito);

          }
         }
    

       





}


?>