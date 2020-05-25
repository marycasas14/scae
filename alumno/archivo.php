<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include 'config.inc.php';
        $db=new Conect_MySql();
            $sql = "select*from solicitud where boleta=".$_GET['boleta'];
            $query = $db->execute($sql);
            if($datos=$db->fetch_row($query)){
                if($datos['documentos']==""){?>
        <p>NO tiene archivos</p>
                <?php }else{ ?>
        <iframe src="archivos/<?php echo $datos['documentos']; ?>"></iframe>
                
                <?php } } ?>
    </body>
</html>
