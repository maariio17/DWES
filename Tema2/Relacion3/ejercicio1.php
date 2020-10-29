<?php

$arr = array(10, 25, 2, 1, 99, 6, 90, 17);

$longitud = count($arr);
echo "Array<br>";
for ($i=0; $i<$longitud; $i++){
    echo "$arr[$i]";
    echo "<br>";
}
echo "<hr>";
echo "Array Ordenado<br>";
for ($i=0; $i<$longitud; $i++){
    sort($arr);
    echo "$arr[$i]";
    echo "<br>";
}
echo "<hr>";
echo "Longitud Array<br>";
echo "$longitud";
echo "<hr>";
echo "Buscar un elemento del array<br>";
echo "$arr[5]";
//$search = array_search($buscado, $numeros);
echo "<hr>";
echo "Buscar un elemento del array segun la posicion que decida el usuario<br>";
$posicion = $_GET['posicion'];
echo "$arr[$posicion]";


//Funcion mostrarArray
function mostrarArray($numeros){
    foreach ($array as $numero) {
        
    }
}