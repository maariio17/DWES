<?php

function factorial($numero){
    if ($numero > 1){
        $fact = 1;
        for ($i=1; $i<=$numero; $i++){
            $fact = $fact *$i;
        }
        return $fact;
    } elseif ($numero<0) {
        return "No existe";
    } else{
        return 1;
    }
}

$numero = $_GET['numero'];
$resultado = factorial($numero);
echo "Factorial de $numero es $resultado";
