<?php

function esprimo($numero){
    
    //$numero=0;
    $cont=0;
    for ($i=1; $i <=$numero; $i++) {
        if ($numero % $i==0) {
            $cont=$cont+1;
        }
    }

    if ($cont==2) {
        echo "el número es primo";
    }
    else {
        echo "el número no es primo";
    }
}

$n = $_GET["numero"];
$resultado = esprimo($n);
echo "$resultado";
