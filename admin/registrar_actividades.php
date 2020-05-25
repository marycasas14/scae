<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div style="width: 500px;margin: auto;border: 1px solid blue;padding: 30px;">
            <h4>Registrar Actividad</h4>
            <form method="post" action="re_p.php">
                <table>
                    
                         <tr>
                        <td><label>Nombre del Docente</label></td>
                        <td><select name="nombre_p" class="contenedor2" style="width: 173px">
                        <option value="">Seleccionar</option>
                        <option value="todos">Todos</option>
                        

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
                                 
                        <td><input type="submit" value="ASIGNAR" name="ASIGNAR"></td>     
                        </TR>
 
                    

                  
                
                   
    
                </table>
            </form>            
        </div>
    </body>
</html>
