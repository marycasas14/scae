<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div style="width: 500px;margin: auto;border: 1px solid blue;padding: 30px;">
            <h4>Consulta de Actividades</h4>
            <form method="post" action="buscar_a.php">
                <table>
                    
                         <tr>
                        <td><label>Nombre de la Actividad</label></td>
                        <td><select name="nombre_act" class="contenedor2" style="width: 173px">
                        <option value="">Seleccionar</option>
                        <option value="todos">Todos</option>
                        

                 <?php 
                        $conex = mysqli_connect("sql211.tonohost.com","ottos_25845859","pelusa14","ottos_25845859_scae"); 
                        $query=mysqli_query($conex,"SELECT  nombre_act FROM actividad");
                        while($datos = mysqli_fetch_array($query))
                        {
                    ?>
                        <option value="<?php echo $datos['nombre_act']?>"> <?php echo $datos['nombre_act']?> </option>


                    <?php
                        }
                    ?> 

                    </select></td>
                                 
                    
                        <td><input type="submit" value="BUSCAR" name="buscar"></td>
                        <td><input type="submit" value="BORRAR" name="borrar"></td>
                        <td><input type="submit" value="EDITAR" name="editar"></td>
                      
                    </tr>
                      <tr><td><input type="submit" value="AGREGAR" name="AGREGAR"></td></tr>
                
                   
    
                </table>
            </form>            
        </div>
    </body>
</html>
