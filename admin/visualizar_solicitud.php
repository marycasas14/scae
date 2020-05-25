<?php 

	$conexion=mysqli_connect('localhost','root','','scae');
	if (isset($_POST['visualizar'])) {

        $boleta=trim($_POST['boleta']);   

        



 ?>


<!DOCTYPE html>
<html>
<head>
	<title>mostrar datos</title>
</head>
<body>

<br>
    <center>
		
		<?php 

        $boleta=trim($_POST['boleta']);
		$sql="SELECT *  FROM solicitud where boleta= '$boleta'";
		$result=mysqli_query($conexion,$sql);

        $mostrar=mysqli_fetch_array($result);
	    
	 ?>

    <div style="width: 500px;margin: auto;border: 1px solid blue;padding: 30px;">
	<form action="decision.php" method="post">
	<center>
	<table>	
	<tr>
	
	<td>Folio</td>
	<td><input type="text"  value="<?php echo $mostrar['folio']; ?>"    name="folio" style="width: 170px">
	</td>
    </tr>

	<tr>
	<td>Boleta</td>
		
	<td><input type="text"  value="<?php echo $mostrar['boleta']; ?>"   name="boleta" style="width: 170px">
	</td></tr>
	
	<tr>
	<td>Fecha</td>
	<td><input type="text"  value="<?php echo $mostrar['fecha']; ?>"    name="fecha"style="width: 170px">
    </td></tr>
    
    <tr>
    <td>Nombre</td>
    <td><input type="text"  value="<?php echo $mostrar['nombre']; ?>"   name="nombre" style="width: 170px"></td>
    </tr>
    

    <tr>
    <td>Edad</td>
    <td><input type="text"  value="<?php echo $mostrar['edad']; ?>"     name="edad" style="width: 170px"></td>
    </tr>

    <tr>
    <td>Genero</td>
    <td><input type="text"  value="<?php echo $mostrar['genero']; ?>"   name="genero" style="width: 170px"></td>
    </tr>

    <tr>
    <td>Carrera</td>
    <td><input type="text"  value="<?php echo $mostrar['carrera']; ?>"  name="carrera" style="width: 170px"></td>
    </tr>

    <tr>
    <td>Smestre</td>
    <td><input type="text"  value="<?php echo $mostrar['semestre']; ?>" name="semestre" style="width: 170px"></td>
    </tr>

    <tr>
    <td>Correo</td>
    <td><input type="text"  value="<?php echo $mostrar['correo']; ?>"   name="correo" style="width: 170px"></td>
    </tr>

    <tr>
    <td>Telefono</td>
    <td><input type="text"  value="<?php echo $mostrar['telefono']; ?>" name="telefono" style="width: 170px"></td>
    </tr>

    <tr>
    <td>Domicilio</td>
    <td><input type="text"  value="<?php echo $mostrar['domicilio']; ?>"name="domicilio" style="width: 170px"></td>
    </tr>

    <tr>
    <td>Contacto de Emergencia</td>
    <td><input type="text"  value="<?php echo $mostrar['contacto']; ?>" name="contacto" style="width: 170px"></td>
    </tr>

    <tr>
    <td>Taller</td>
    <td><input type="text"  value="<?php echo $mostrar['taller']; ?>"   name="taller" style="width: 170px"></td>
    </tr>

    <tr>
    <td>Documentos</td>
    <td><a href="archivo.php?boleta=<?php echo $mostrar['boleta']?>"><?php echo $mostrar['documentos']; ?></td>
    </tr> 
  

<TR>
	<TD></TD>
	<TD></TD>
</TR>

<TR>
	<TD></TD>
	<TD></TD>
</TR>

<TR>
	<TD></TD>
	<TD></TD>
</TR>

    <TR>
    <TD><input type="submit"class="btn btn-primary btn-block"  value="Aceptar" name="aceptar" style="width: 170px"></TD>
    <TD><input type="submit"class="btn btn-primary btn-block"  value="Rechazar" name="rechazar" style="width: 170px"></TD>	
    </TR>      
    </table>           
   <br> 
</div>
</form>
<?php
}


 ?>
   
	</table>
	</center>

    
    	


</body>
</html>






























