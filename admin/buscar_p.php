<?php

$conex = mysqli_connect("sql211.tonohost.com","ottos_25845859","pelusa14","ottos_25845859_scae"); 

if (isset($_POST['buscar'])) {
 
        $nombre_p= $_POST['nombre_p'];
        

        if(empty($nombre_p)){

            echo "Selecciona un nombre";
            header("location: consulta_profesor.php");
          

        }else{
             
            $busca_p=mysqli_query($conex,"SELECT  * FROM profesor where nombre_p='$nombre_p'");
            $resbusca= mysqli_fetch_array($busca_p);
            $id_profesor=$resbusca['id_profesor'];
            $nombre_p=$resbusca['nombre_p'];
            $telefono=$resbusca['telefono'];
            $direc=$resbusca['direccion'];
            $archivo=$resbusca['documentos'];


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
                        <td><input type="text" name="nombre_p" value="<?php echo $nombre_p; ?>" style="width: 170px"></td>
                    </tr>

                      <tr>
                        <td><label>Telefono</label></td>
                        <td><input type="text" name="telefono" value="<?php echo $telefono; ?>" style="width: 170px"></td>
                    </tr>

                     <tr>
                        <td><label>Domicilio</label></td>
                        <td><input type="text" name="direccion" value="<?php echo $direc; ?>" style="width: 170px"></td>
                    </tr>
                     
                    <tr>
                        <td>Documentos</td>
                        <td><a href="archivo_p.php?id_profesor=<?php echo $resbusca['id_profesor']?>"><?php echo $resbusca['documentos']; ?></td>
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
    $nombre_p= $_POST['nombre_p'];

    if(empty($nombre_p)){

        header("location:consulta_profesor.php");

    }else
    {

    $busca_p=mysqli_query($conex,"SELECT  * FROM profesor where nombre_p='$nombre_p'");
    $resbusca= mysqli_fetch_array($busca_p);
    $id=$resbusca['id_profesor'];
          
    $borrarprim="DELETE FROM actividad where id_profesor='$id'";
    $borrarpri=mysqli_query($conex,$borrarprim);

    $borrarc="DELETE FROM profesor where id_profesor='$id'";
    $borrar=mysqli_query($conex,$borrarc);

    if ($borrar) {
        echo "Datos eliminados";
    }else{
        echo "error";
    }
}
}



if (isset($_POST['editar'])) {
 
        $nombre_p= $_POST['nombre_p'];
        

        if(empty($nombre_p)){

            echo "Selecciona un nombre";
            header("location: consulta_profesor.php");
          

        }else{
             
            $busca_p=mysqli_query($conex,"SELECT  * FROM profesor where nombre_p='$nombre_p'");
            $resbusca= mysqli_fetch_array($busca_p);
            $id_profesor=$resbusca['id_profesor'];
            $nombre_p=$resbusca['nombre_p'];
            $telefono=$resbusca['telefono'];
            $direc=$resbusca['direccion'];
            $archivo=$resbusca['documentos'];


            ?>

               <html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div style="width: 500px;margin: auto;border: 1px solid blue;padding: 30px;">
            <h4>Editar Registros</h4>
            <form method="post" action="guardar_p.php" enctype="multipart/form-data">

                <table>


                        <tr>
                        <td><label>ID</label></td>
                        <td><input type="text" name="id_profesor" value="<?php echo $id_profesor; ?>" style="width: 170px"></td>
                    </tr>
                           

                           <tr>
                        <td><label>Nombre</label></td>
                        <td><input type="text" name="nunombre" value="<?php echo $nombre_p; ?>" style="width: 170px"></td>
                    </tr>

                      <tr>
                        <td><label>Telefono</label></td>
                        <td><input type="text" name="nutelefono" value="<?php echo $telefono; ?>" style="width: 170px"></td>
                    </tr>

                     <tr>
                        <td><label>Domicilio</label></td>
                        <td><input type="text" name="nudireccion" value="<?php echo $direc; ?>" style="width: 170px"></td>
                    </tr>

                    <tr>
                        <td><label>Editar Documentos</label></td>
                        
                        <td colspan="2"><input type="file" name="nuarchivo"></td>
                    <tr>
                    

                        <p><br><button  type="submit" name="guardar" class="btn btn-default btn-block">Guardar</button></p>

    
                </table>



            </form>            
        </div>
    </body>
</html>




            <?php



}
   

}



if (isset($_POST['ASIGNAR'])) {
    $nombre_p= $_POST['nombre_p'];

    if(empty($nombre_p)){

        header("location:consulta_profesor.php");

    }else
    {
 
                   
     $busca_p=mysqli_query($conex,"SELECT  * FROM profesor where nombre_p='$nombre_p'");
     $resbusca= mysqli_fetch_array($busca_p);
     $id_profesor=$resbusca['id_profesor'];



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
                        <td><input type="text" name="id_profesor" value="<?php echo $id_profesor; ?>" style="width: 170px" readonly="readonly"></td>
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

