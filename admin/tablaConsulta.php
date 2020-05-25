<?php
////////////////// CONEXION A LA BASE DE DATOS ////////////////////////////////////
$host="localhost";
$usuario="root";
$contraseña="";
$base="scae";

$conexion= new mysqli($host, $usuario, $contraseña, $base);
if ($conexion -> connect_errno)
{
	die("Fallo la conexion:(".$conexion -> mysqli_connect_errno().")".$conexion-> 
		mysqli_connect_error());
}

/////////////////////// CONSULTA A LA BASE DE DATOS ////////////////////////
$resAlumnos=$conexion->query("SELECT * FROM alumno");


///TABLA DONDE SE DESPLIEGAN LOS REGISTROS //////////////////////////////
echo '<table class="table" style="font-size:12px; margin-top:-1%;">

				<tr class="active">
					<th>BOLETA</th>
					<th>NOMBRE</th>
					<th>EDAD</th>
					<th>GENERO</th>
					<th>CARREA</th>
					<th>SEMESTRE</th>
					<th>HORAS</th>
					<th>TOTAL DE ELECTIVAS</th>
					
					
					
					

				</tr>';

				while ($filaAlumnos = $resAlumnos->fetch_array(MYSQLI_BOTH))
				{
					echo'<tr>
						 <td>'.$filaAlumnos['boleta'].'</td>
						 <td>'.$filaAlumnos['nombre'].'</td>
						 <td>'.$filaAlumnos['edad'].'</td>
						 <td>'.$filaAlumnos['genero'].'</td>
						 <td>'.$filaAlumnos['carrera'].'</td>
						 <td>'.$filaAlumnos['semestre'].'</td>
						 <td>'.$filaAlumnos['horas_t'].'</td>
						 <td>'.$filaAlumnos['electivas'].'</td>
						 
						 
						 
						 

						 </tr>';
				}
				echo '</table>';
?>