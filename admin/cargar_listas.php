<?php 
require_once 'con_db.php';

function getListasRep(){


  $query = "SELECT * FROM  solicitud";
  $result = $conex->query($query);
  $listas = '<option value="0">Elige una opción</option>';
  while($row = $result->fetch_array(MYSQLI_ASSOC)){
    $listas .= "<option value='$row[folio]'>$row[boleta]</option>";
  }
  return $listas;
}

echo getListasRep();