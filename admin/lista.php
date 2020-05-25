<?php

$conex = mysqli_connect("sql211.tonohost.com","ottos_25845859","pelusa14","ottos_25845859_scae"); 

if (isset($_POST['Aceptar'])) {
    
    $id_profesor= $_POST['id_profesor'];
       
       if(empty($id_profesor)){
            
            header("location: asistencia.php");


        }else{

               ?>

               <div style="width: 500px;margin: auto;border: 1px solid blue;padding: 30px;">
               <h4>Consulta de Actividades</h4>
               <form method="post" action="estatus.php">
                <table>
                    
                         <tr>
                        <td><label>Elige un Grupo</label></td>
                        <td><select name="grupo" class="contenedor2" style="width: 173px">
                        <option value="">Seleccionar</option>
                        

                 <?php 
                        $conex = mysqli_connect("sql211.tonohost.com","ottos_25845859","pelusa14","ottos_25845859_scae"); 
                        $query=mysqli_query($conex,"SELECT nombre_act FROM actividad where id_profesor='$id_profesor'");
                        while($datos = mysqli_fetch_array($query))
                        {
                   
                    ?>
                        <option value="<?php echo $datos['nombre_act']?>"> <?php echo $datos['nombre_act']?> </option>


                    <?php
                        }
                    ?> 

                    </select></td>
                                 
                    
                        <td><input type="submit" value="Aceptar" name="Aceptar"></td>
                        
                    </tr>
                   
    
                </table>
            </form>            
        </div>

               <?php


              
               }





}


?>



