<!DOCTYPE html>

<link rel="stylesheet" href="sweetalert.css">
<?php
include_once 'config.inc.php';
if (isset($_POST['subir'])) {
    $nombre = $_FILES['archivo']['name'];
    $ruta = $_FILES['archivo']['tmp_name'];
    $destino = "../admin/archivos/" . $nombre;
    
            $boleta= $_POST['boleta'];
            $fecha= $_POST['fecha'];
            $conf_boleta= $_POST['conf_boleta'];
            $nombre_alumno= $_POST['nombre_alumno']; 
            $edad= $_POST['edad'];
            $genero= $_POST['genero'];
            $carrera= $_POST['carrera'];
            $semestre= $_POST['semestre'];
            $correo= $_POST['correo'];
            $telefono= $_POST['telefono'];
            $domicilio= $_POST['domicilio'];
            $contacto= $_POST['contacto'];
            $taller= $_POST['taller'];
            


            
            if(empty($boleta) || empty($conf_boleta) || empty($fecha) || empty($nombre) || empty($edad) || empty($genero) || empty($carrera) || empty($carrera) || empty($semestre) || empty($correo) || empty($telefono) || empty($domicilio) || empty($contacto) || empty($taller)){


                echo "error completa los campos";
                $actualizar=1;
                header('Refresh:'.$actualizar);

            }else{
            if($boleta == $conf_boleta){
            if(filter_var($correo, FILTER_VALIDATE_EMAIL)) {

            $conex = mysqli_connect("sql211.tonohost.com","ottos_25845859","pelusa14","ottos_25845859_scae"); 
            $qu=mysqli_query($conex,"SELECT  cve_act FROM actividad where nombre_act='$taller'");
            $res= mysqli_fetch_array($qu);
            $taller=$res['cve_act'];
            $verduplicado="SELECT boleta FROM alumno_actividad where cve_act='$taller' and boleta='$boleta'";
            $resultado=mysqli_query($conex,$verduplicado);
            $verificar=mysqli_num_rows($resultado);
            
            if ($verificar > 0) {
                
               echo "Ya estas registrado en esta actividad";
            }else{

            copy($ruta,$destino);
            $db=new Conect_MySql();
            $sql = "INSERT INTO solicitud(folio,boleta,fecha,nombre,edad,genero,carrera,semestre,correo,telefono,domicilio,contacto,taller,documentos) VALUES('NULL','$boleta','$fecha','$nombre_alumno','$edad','$genero','$carrera','$semestre','$correo','$telefono','$domicilio','$contacto','$taller','$nombre')";
            $query = $db->execute($sql);
            if($query){
                echo "Se guardo correctamente";
                $actualizar=1;
                header('Refresh:'.$actualizar);


            }
          else {
            echo "Error";
                $actualizar=1;
                header('Refresh:'.$actualizar);


        }}

    }else{
        echo "email invalido";
        $actualizar=1;
        header('Refresh:'.$actualizar);

    }
    }else{
        echo "Las Boletas no coinciden ";
        $actualizar=1;
        header('Refresh:'.$actualizar);

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
            <h4>Tramitar Solicitud</h4>
            <form method="post" action="" enctype="multipart/form-data">
                <table>
                    <tr>
                        <td><label>Boleta</label></td>
                        <td><input type="text" name="boleta" style="width: 170px"></td>
                    </tr>

                       <tr>
                        <td><label>Confirma Boleta</label></td>
                        <td><input type="text" name="conf_boleta" style="width: 170px"></td>
                    </tr>


                    </tr>

                       <tr>

                        <?php
                        date_default_timezone_set('America/Mexico_City');
                        $fecha_actual=date("Y-m-d");
                        ?>
                        <td><label>Fecha</label></td>
                        <td><input type="date" name="fecha" value="<?=$fecha_actual?>" style="width: 170px" readonly="readonly"></td>
                    </tr>





                           <tr>
                        <td><label>Nombre</label></td>
                        <td><input type="text" name="nombre_alumno" style="width: 170px"></td>
                    </tr>

                     
                    <tr>
                        <td><label>Edad</label></td>
                        <td><input type="text" name="edad" style="width: 170px"></td>
                    </tr>
                  
                    <tr>
                        <td><label>Genero</label></td>
                        <td><select name="genero" style="width: 173px">
                            <option >Seleccionar</option>
                            <option value="femenino">Mujer</option>
                            <option value="masculino">Hombre</option>
                        </select></td>
                    </tr>
                  
                    <tr>
                        <td><label>Carrera</label></td>
                        <td><select name="carrera" style="width: 173px">
                            <option >Seleccionar</option>
                            <option value="Ciencias de la Informatica">Ciencias de la Informatica</option>
                            <option value="Ingenieria en Informatica">Informatica</option>
                            <option value="Administracion Industrial">Administracion Industrial</option>
                            <option value="Ingenieria Industrial">Ingenieria Industrial</option>
                            <option value="Ingenieria en Transporte">Ingenieria en Transporte</option>
                            <option value="Ingenieria en sistemas Automotrices">Ingenieria en sistemas Automotrices</option>
                            
                        </select></td>

                    </tr>
                  
                    <tr>
                        <td><label>Semestre</label></td>
                        <td><select name="semestre" style="width: 173px">
                            <option>Seleccionar</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="egresado electivas">Egresado Electivas</option>
                        </select></td>
                     </tr>
                  
                    <tr>
                        <td><label>Correo</label></td>
                        <td><input type="text" name="correo" style="width: 170px"></td>
                    </tr>
                  
                    <tr>
                        <td><label>Telefono</label></td>
                        <td><input type="text" name="telefono" style="width: 170px"></td>
                    </tr>
                  
                    <tr>
                        <td><label>Domicilio</label></td>
                        <td><textarea name="domicilio" style="width: 170px"></textarea></td>
                    </tr>
                    
                    </tr>
                  
                    <tr>
                        <td><label>Contacto de Emergencia</label></td>
                        <td><input type="text" name="contacto" style="width: 170px"></td>
                    </tr>
                  
                    <tr>
                        <td><label>Taller</label></td>
                        <td><select name="taller" class="contenedor2" style="width: 173px">
                        <option value="">Seleccionar</option>

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
                    </tr>
                  
                  
                    <tr>
                        <td><label>Por favor en un solo pdf escanear vigencia IMSS,Credencial Escolar,Horario,Dnativo de Inscripcion y Certificado Medico</label></td>
                        
                        <td colspan="2"><input type="file" name="archivo"></td>
                    <tr>
                        <td><input type="submit" value="subir" name="subir"></td>
                    </tr>

                    <a href="archivo.php?boleta=<?php echo $datos['boleta']?>"><?php echo $datos['documentos']; ?>
                </table>
            </form>            
        </div>
    </body>
</html>
