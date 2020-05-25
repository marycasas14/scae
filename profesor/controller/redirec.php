<?php

  session_start();

  if($_SESSION['cargo'] == 1){
    header('location: ../../admin/menu_administrador.html');
  }else if($_SESSION['cargo'] == 2){
    header('location: ../admin/menu_profesor');
  }

 ?>
