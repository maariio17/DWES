<?php

function factorial($numero){
    if ($numero > 1){
        $fact = 1;
        for ($i=1; $i<=$numero; $i++){
            $fact = $fact *$i;
        }
        return $fact;
    } elseif ($numero<0) {
        try{
            throw new InvalidArgumentException("Numero negativo");
            return -1;
        } catch (Exception $ex) {
            echo "Se ha producido el siguiente error: ".$ex->getMessage()."<br>";
        }
    } else{
        return 1;
    }
}

$numero = $_GET['numero'];
$resultado = factorial($numero);

try{
    if (isset($numero)){
        if ($resultado == -1){
            echo "";
        }else {
            echo "Factorial de $numero es $resultado";
        }
    } else{
        throw new Exception('Faltan parametros por la URL');
    }
} catch (Exception $e) {
        echo "Ha habido un error ".$e->getMessage(). "<br>";
}
