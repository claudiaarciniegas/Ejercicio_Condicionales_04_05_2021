<?php
    $edad = (int) $_REQUEST["edad"];
    echo <<<EDAD
    Tu edad es: $edad<br>
EDAD;

    if ($edad < 1){
        echo <<<RecienNacido
        Tu eres un recien nacido <br>
RecienNacido;
     }elseif($edad<10){
        echo <<<Niño
        Tu eres un Niño
Niño;
     }elseif($edad<17){
        echo <<<Adolescente
        Tu eres un Adolescente
Adolescente;
     }elseif($edad<=25){
        echo <<<MayorEdad
        Tu eres un Mayor de edad 
MayorEdad; 
    }elseif($edad<=60){
        echo <<<Señor
        Tu eres un Señor(a)
Señor; 
    }elseif($edad<=99){
        echo <<<Anciano
        Tu eres un Anciano
Anciano;
    }else{
        echo <<<EstasGracia
        Tu estás viviendo de gracia
EstasGracia;
    }
?>