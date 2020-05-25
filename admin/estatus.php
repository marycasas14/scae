<?php

$conex = mysqli_connect("sql211.tonohost.com","ottos_25845859","pelusa14","ottos_25845859_scae"); 

if (isset($_POST['Aceptar'])) {
    
    $grupo=$_POST['grupo'];

     $qu=mysqli_query($conex,"SELECT  cve_act FROM actividad where nombre_act='$grupo'");
     $res= mysqli_fetch_array($qu);
     $cve_act=$res['cve_act'];

     
  ?>

    <!DOCTYPE html>
    <html>
    <head>
    	<title></title>
    </head>
    <body>

          <div style="width: 500px;margin: auto;border: 1px solid blue;padding: 30px;">
            <h4>Registro de Asistencia</h4>


            <form method="post" action="comprobar.php">
                <table>

                          


                	    <TR>

                        <td><label>Clave de Actividad</label></td>
                        <td><input type="text" name="cve_act" value="<?php echo $cve_act; ?>" style="width: 170px" readonly="readonly"></td>
                        </TR>

                    
                         <tr>

                        <?php
                        date_default_timezone_set('America/Mexico_City');
                        $fecha_actual=date("Y-m-d");
                        ?>
                        <td><label>Fecha</label></td>
                        <td><input type="date" name="fecha" value="<?=$fecha_actual?>" style="width: 170px" readonly="readonly"></td>
                        <td><input type="submit" value="Falta" name="falta" style="width: 100px"></td>
                        <TD></TD>
                       


                         </TR>

                   
                    	
                        <TR>
                        <td><label>Elige un Alumno</label></td>
                        <td><select name="alumno" class="contenedor2" style="width: 173px">
                        <option value="">Seleccionar</option>
                        

                 <?php 
                        $conex = mysqli_connect("sql211.tonohost.com","ottos_25845859","pelusa14","ottos_25845859_scae"); 
                        $query=mysqli_query($conex,"SELECT nombre from alumno join alumno_actividad on alumno.boleta=alumno_actividad.boleta and alumno_actividad.cve_act='$cve_act';");
                        while($datos = mysqli_fetch_array($query))
                        {
                   
                    ?>
                        <option value="<?php echo $datos['nombre']?>"> <?php echo $datos['nombre']?> </option>


                    <?php
                        }
                    ?> 

                    </select></td>
                     <td><input type="submit" value="asistencia" name="asistencia" style="width: 100px"></td>
                </TR>

                    <TR>

                        <td><label>Horas</label></td>
                        <td><input type="text" name="horas" style="width: 170px"></td>
                    </TR>

                     

                   


    
                </table>
            </form>            
        </div>
   

    
    </body>
    </html>



  <?php  

            

}

       
?>