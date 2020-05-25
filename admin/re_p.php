<!DOCTYPE html>

<?php

$conex = mysqli_connect("sql211.tonohost.com","ottos_25845859","pelusa14","ottos_25845859_scae"); 

if (isset($_POST['subir'])) {
 
    $nombre = $_FILES['archivo']['name'];
    $ruta = $_FILES['archivo']['tmp_name'];
    $destino = "../admin/archivos_p/". $nombre;
    copy($ruta,$destino);

    
    $nombre_p= $_POST['nombre_p'];
    $telefono= $_POST['telefono'];
    $direccion=$_POST['direccion'];
    $nombre_act=$_POST['nombre_act'];
    $materiales= $_POST['materiales'];
    $cupo=$_POST['cupo'];
        
        

        if(empty($nombre_p) || empty($telefono) ||empty($direccion) ||empty($nombre_act) ||empty($materiales) ||empty($nombre)||empty($cupo)){

            echo "completa los campos";
            echo "error completa los campos";
            $actualizar=1;
            header('Refresh:'.$actualizar);


        }else{

            $cons=mysqli_query($conex,"SELECT nombre_p FROM profesor WHERE nombre_p='$nombre_p'");
            $verificar=mysqli_num_rows($cons);
        
        if($verificar > 0){
            echo "Error Profesor ya Registrado";
        }else{

              $consulta = "INSERT INTO profesor(nombre_p, telefono, direccion,documentos) VALUES ('$nombre_p','$telefono','$direccion','$nombre')";
              $resultado = mysqli_query($conex,$consulta);
 
             if ($resultado){
            

                $qu=mysqli_query($conex,"SELECT  id_profesor FROM profesor where nombre_p='$nombre_p'");
                $res= mysqli_fetch_array($qu);
                $id_profesor=$res['id_profesor'];
            
       

                $ingresar_act="INSERT INTO actividad(nombre_act,materiales,cupo,id_profesor) VALUES ('$nombre_act','$materiales','$cupo','$id_profesor')";
                $res2=mysqli_query($conex,$ingresar_act);

                if($res2){
                
                   echo "Registro Correcto";

                } else {
                   echo "error";
                 }

               }





}
}
}


?>


<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div style="width: 500px;margin: auto;border: 1px solid blue;padding: 30px;">
            <h4>Agregar Actividad</h4>
            <form method="post" action="" enctype="multipart/form-data">
                <table>
                    
                           <tr>
                        <td><label>Nombre</label></td>
                        <td><input type="text" name="nombre_p" style="width: 170px"></td>
                    </tr>

                      <tr>
                        <td><label>Telefono</label></td>
                        <td><input type="text" name="telefono" style="width: 170px"></td>
                    </tr>

                     <tr>
                        <td><label>Domicilio</label></td>
                        <td><textarea name="direccion" style="width: 170px"></textarea></td>
                    </tr>
                   
                  
                    
                    <tr>
                        <td><label>Nombre de la Actividad</label></td>
                        <td><input type="text" name="nombre_act" style="width: 170px"></td></td>
                    </tr>
                   

                  
                    <tr>
                        <td><label>Materiales</label></td>
                        <td><textarea name="materiales" style="width: 170px"></textarea></td>
                    </tr>
                    
                    </tr>
                  
                  
                      <tr>
                        <td><label>Cupo</label></td>
                        <td><textarea name="cupo" style="width: 170px"></textarea></td>
                    </tr>
                    
                    </tr>





                    <tr>
                        <td><label>Por favor en un solo pdf escanear los documentos</label></td>
                        
                        <td colspan="2"><input type="file" name="archivo"></td>
                    <tr>
                        <td><input type="submit" value="subir" name="subir"></td>
                    </tr>

    
                </table>
            </form>            
        </div>
    </body>
</html>
