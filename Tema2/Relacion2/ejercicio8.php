<?php

function matriculaValida($matricula){
    //4 numeros 3 letras matusculas
    //Comprobar que la longirud de la cadena es 7
    if (strlen($matricula)!=7) return false;
    //Coger los numeros
    $num = substr($matricula, 0, 4);
    $todonumeros = ctype_digit($num);
    if (!$todonumeros) return false;
    //Coger las letras
    $letras = substr($matricula, 4, 3);
    //Comprobar que todas las letras son matusculas
    $mayus = ctype_upper($letras);
    if (!$mayus)return false;
    //Comprobar que no aparecen las vocales
    $vocales = strpbrk($letras, "AEIOU");
    if ($vocales==false) return true;
    else return false;
}

$matricula = $_GET["matricula"];
matriculaValida($matricula);

if ($matricula){
    echo "matricula valida";
} else {
    echo "matricula no valida";
}

