<?php
    $nDato1c=$_GET["caNum1"];
    
    
        if ($nDato1c==0 || $nDato1c==1||$nDato1c==2 || $nDato1c==3 ){
            echo "Dedicate al comercio informal"."</p> ";
            echo"<a href='index.php'>Inicio</a>";
            
        }else if ($nDato1c==4 || $nDato1c==5 ){
            echo "En la ralla, ponte las pilas "."</p> ";
            echo"<a href='index.php'>Inicio</a>";
            
        }else if ($nDato1c==5 || $nDato1c==6){
            echo "A que santo le resaste"."</p> ";
            echo"<a href='index.php'>Inicio</a>";
            
        }else if ($nDato1c==7 || $nDato1c ==8){
            echo "Vas bien, vas bien"."</p> ";
            echo"<a href='index.php'>Inicio</a>";
            
        }else if ($nDato1c==9 || $nDato1c==10){
            echo "De aqui al exito"."</p> ";
            echo"<a href='index.php'>Inicio</a>";
            
        }else {
            echo "Aqui se redondea "."</p> ";
            echo"<a href='index.php'>Intentar de nuevo</a>";
            
        }


     


?>