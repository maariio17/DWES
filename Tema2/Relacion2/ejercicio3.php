<?php

$texto = "Hola soy Pepe";
if (empty($texto)){
    echo 'La variable esta vacia <br>';
    $texto= "hola soy mario";
    $texto = strtoupper($texto);
    echo "$texto";
} else{
    echo "$texto";
}

