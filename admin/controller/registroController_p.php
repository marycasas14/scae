<?php

  $id   = $_POST['id'];
  $nombre  = $_POST['nombre'];
  $telefono  = $_POST['telefono'];

  if(empty($id) || empty($nombre) || empty($telefono))
  {

    echo 'error_1'; // Un campo esta vacio y es obligatorio

  }else{

        require_once('../model/usuario.php');

        $alta = new Usuario();

        $alta -> registroUsuario($id, $nombre, $telefono);

    }




?>
