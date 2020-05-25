<?php
$conex = mysqli_connect("sql211.tonohost.com","ottos_25845859","pelusa14","ottos_25845859_scae"); 

            $busca_p=mysqli_query($conex,"SELECT cupo FROM actividad where cve_act='7'");
            $resbusca= mysqli_fetch_array($busca_p);
            $id_profesor=$resbusca['cupo'];
            
            $res=($id_profesor+1);
            echo $res;



?>