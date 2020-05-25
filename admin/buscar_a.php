<?php

$conex = mysqli_connect("sql211.tonohost.com","ottos_25845859","pelusa14","ottos_25845859_scae"); 

if (isset($_POST['buscar'])) {
 
        $nombre_act= $_POST['nombre_act'];
        

        if(empty($nombre_act)){

            echo "Selecciona una actividad";
            header("location: consulta_actividad.php");
          

        }else{
             
            $busca_p=mysqli_query($conex,"SELECT  * FROM actividad where nombre_act='$nombre_act'");
            $resbusca= mysqli_fetch_array($busca_p);
            $cv_act=$resbusca['cve_act'];
            $nombre_act=$resbusca['nombre_act'];
            $materiales=$resbusca['materiales'];
            $cupo=$resbusca['cupo'];
            $id_profesor=$resbusca['id_profesor'];
            $creditos=$resbusca['horas_por_credito'];


            ?>

               <html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div style="width: 500px;margin: auto;border: 1px solid blue;padding: 30px;">
            <h4>Consultar Docente</h4>
            <form method="post" enctype="multipart/form-data">
                <table>
                    
                           <tr>
                        <td><label>Nombre</label></td>
                        <td><input type="text" name="nombre_act" value="<?php echo $nombre_act; ?>" style="width: 170px"></td>
                    </tr>

                      <tr>
                        <td><label>Materiales</label></td>
                        <td><input type="text" name="materiales" value="<?php echo $materiales; ?>" style="width: 170px"></td>
                    </tr>

                     <tr>
                        <td><label>Cupo</label></td>
                        <td><input type="text" name="cupo" value="<?php echo $cupo; ?>" style="width: 170px"></td>
                    </tr>
                     
                    <tr>
                        <td>ID Profesor</td>
                        <td><input type="text" name="cupo" value="<?php echo $id_profesor; ?>" style="width: 170px"></td>
                        </tr> 

                    <tr>
                        <td>Horas Por Credito</td>
                        <td><input type="text" name="creditos" value="<?php echo $horas_por_credito; ?>" style="width: 170px"></td>
                
                     </tr>
                     <tr>
                        <td><BUTTON>REGRESAR</BUTTON></td>
                        
                    </tr>
                     
    
                </table>



            </form>            
        </div>
    </body>
</html>




            <?php



}


}




if (isset($_POST['borrar'])) {
    $nombre_act= $_POST['nombre_act'];

    if(empty($nombre_act)){

        header("location:consulta_actividad.php");

    }else
    {

    $busca_p=mysqli_query($conex,"SELECT  * FROM actividad where nombre_act='$nombre_act'");
    $resbusca= mysqli_fetch_array($busca_p);
    $id=$resbusca['cve_act'];
          
    $borrarprim="DELETE FROM actividad where cve_act='$id'";
    $borrarpri=mysqli_query($conex,$borrarprim);

    $borrarc="DELETE FROM actividad where cve_act='$id'";
    $borrar=mysqli_query($conex,$borrarc);

    if ($borrar) {
        echo "Datos eliminados";
    }else{
        echo "error";
    }
}
}



if (isset($_POST['editar'])) {
 
        $nombre_act= $_POST['nombre_act'];
        

        if(empty($nombre_act)){

            echo "Selecciona una actividad";
            header("location: consulta_actividad.php");
          

        }else{
             
            $busca_p=mysqli_query($conex,"SELECT  * FROM actividad where nombre_act='$nombre_act'");
            $resbusca= mysqli_fetch_array($busca_p);
            $cve_act=$resbusca['cve_act'];
            $nombre_act=$resbusca['nombre_act'];
            $materiales=$resbusca['materiales'];
            $direc=$resbusca['cupo'];
            $creditos=$resbusca['horas_por_credito'];



            ?>

               <html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div style="width: 500px;margin: auto;border: 1px solid blue;padding: 30px;">
            <h4>Editar Registros</h4>
            <form method="post" action="guardar_a.php" enctype="multipart/form-data">

                <table>


                        <tr>
                        <td><label>ID</label></td>
                        <td><input type="text" name="cve_act" value="<?php echo $cve_act; ?>" style="width: 170px" readonly="readonly"></td>
                    </tr>
                           

                           <tr>
                        <td><label>Nombre</label></td>
                        <td><input type="text" name="nunombre" value="<?php echo $nombre_act; ?>" style="width: 170px"></td>
                    </tr>

                      <tr>
                        <td><label>materiales</label></td>
                        <td><input type="text" name="numateriales" value="<?php echo $materiales; ?>" style="width: 170px"></td>
                    </tr>

                     <tr>
                        <td><label>Cupo</label></td>
                        <td><input type="text" name="nucupo" value="<?php echo $direc; ?>" style="width: 170px"></td>
                    </tr>


                        <td><label>Cambiar Profesor</label></td>
                        <td><select name="nuevo_profesor" class="contenedor2" style="width: 173px">
                        <option value="">Seleccionar</option>
                        

                 <?php 
                        $conex = mysqli_connect("sql211.tonohost.com","ottos_25845859","pelusa14","ottos_25845859_scae"); 
                        $query=mysqli_query($conex,"SELECT  nombre_p FROM profesor");
                        while($datos = mysqli_fetch_array($query))
                        {
                    ?>
                        <option value="<?php echo $datos['nombre_p']?>"> <?php echo $datos['nombre_p']?> </option>


                    <?php
                        }
                    ?> 

                    </select></td>


                    <tr>
                        <td>Horas Por Credito</td>
                        <td><input type="text" name="creditos_nu" value="<?php echo $creditos; ?>" style="width: 170px"></td>
                    
                     </tr>

                    <tr>
                        <td><p><br><button  type="submit" name="guardar" class="btn btn-default btn-block">Guardar</button></p></td>

                     </tr>
                </table>



            </form>            
        </div>
    </body>
</html>




            <?php



}
   

}



if (isset($_POST['ASIGNAR'])) {
    $nombre_act= $_POST['nombre_act'];

    if(empty($nombre_act)){

        header("location:consulta_actividad.php");

    }else
    {
 
                   
     $busca_p=mysqli_query($conex,"SELECT  * FROM actividad where nombre_act='$nombre_act'");
     $resbusca= mysqli_fetch_array($busca_p);
     $cve_act=$resbusca['cve_act'];



  ?>
     <html>
    <head>
    <meta charset="UTF-8">
    <title></title>
    </head>
    <body>
     

     <div style="width: 500px;margin: auto;border: 1px solid blue;padding: 30px;">
            <h4>Agregar Actividad</h4>
            <form method="post" action="guardar_actividad.php" enctype="multipart/form-data">

                <table>
                        <tr>
                        <td><label>ID</label></td>
                        <td><input type="text" name="cve_act" value="<?php echo $cve_act; ?>" style="width: 170px" readonly="readonly"></td>
                    </tr>
                

                       <tr>
                        <td><label>Nombre de la Actividad</label></td>
                        <td><input type="text" name="nombre_act" style="width: 170px"></td></td>
                       </tr>
                   

                  
                    <tr>
                        <td><label>Materiales</label></td>
                        <td><textarea name="materiales" style="width: 170px"></textarea></td>
                    </tr>
                    
                    
                     <tr>
                        <td><label>Cupo</label></td>
                        <td><textarea name="cupo" style="width: 170px"></textarea></td>
                    </tr>
                    
                     

                    <tr>
                        <td>Horas Por Credito</td>
                        <td><input type="text" name="creditos" value="<?php echo $horas_por_credito; ?>" style="width: 170px"></td>
                    
                    </tr>



                     <TR> 
                      <td><button  type="submit" name="guardar" class="btn btn-default btn-block">Guardar</button></td>
                     </TR>
    
                </table>



            </form>            
        </div>
    </body>
    </html>
   

<?php
}
}



if (isset($_POST['AGREGAR'])) {
    $nombre_act= $_POST['nombre_act'];

    if(empty($nombre_act)){

        header("location:consulta_actividad.php");

    }else
    {
 
                   
     $busca_p=mysqli_query($conex,"SELECT  * FROM actividad where nombre_act='$nombre_act'");
     $resbusca= mysqli_fetch_array($busca_p);
     $cve_act=$resbusca['cve_act'];



  ?>
     <html>
    <head>
    <meta charset="UTF-8">
    <title></title>
    </head>
    <body>
     

     <div style="width: 500px;margin: auto;border: 1px solid blue;padding: 30px;">
            <h4>Agregar Horario</h4>
            <form method="post" action="guardar_horario.php" enctype="multipart/form-data">

                <table>
                        <tr>
                        <td><label>Clave de la Actividad</label></td>
                        <td><input type="text" name="cve_act" value="<?php echo $cve_act; ?>" style="width: 170px" readonly="readonly"></td>
                    </tr>
                

                           <tr>
                        <td><label>Dias</label></td>
                        <td><input type="text "name="dias" style="width: 170px"></td>
                        </tr>
                  

                       <tr>
                        <td><label>Horario</label></td>
                        <td><input type="text" name="horario" style="width: 170px"></td></td>
                       </tr>
                   

                  
                    <tr>
                        <td><label>Ubicacion</label></td>
                        <td><input type="text"  name="ubicacion" style="width: 170px"></td>
                    </tr>
                                        



                     <TR> 
                      <td><button  type="submit" name="guardar" class="btn btn-default btn-block">Guardar</button></td>
                     </TR>
    
                </table>



            </form>            
        </div>
    </body>
    </html>
   

<?php
}
}












?>

