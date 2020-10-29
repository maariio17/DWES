<?php

function calcularPotencias($num, $exponente = 2){
    $potencia = pow($num, $exponente);
    return $potencia;
}

$numero = $_GET["numero"];
$exponente = $_GET["exponente"];
settype($numero, "integer");
settype($exponente, "integer");
//$resultado = calcularPotencias($numero, $exponente);
if (empty($exponente)){
    $resultado = calcularPotencias($numero, 2);
} else{
    $resultado = calcularPotencias($numero, $exponente);
}
echo "$resultado";

//Hacerlo con isset