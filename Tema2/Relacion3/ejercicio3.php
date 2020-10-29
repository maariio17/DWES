<?php

$array1 = array();
$array2 = array();
$longitud1 = count($array1);
$longitud2 = count($array2);

while ($longitud1<10){
    $numero = rand(0, 1);
    array_push($array1, $numero);
    $longitud1++;
}
echo "Array 1: ";
for ($i=0; $i<$longitud1; $i++){
    echo "$array1[$i]"." ";
}

while ($longitud2<10){
        for ($i=0; $i<$longitud1; $i++){
            if ($array1[$i] == 1){
                array_push($array2, 0);
            } else {
                array_push($array2, 1);
            }
        }
    $longitud2++;
}
echo "<br>";
echo "Array 2: ";
for ($i=0; $i<$longitud2; $i++){
    echo "$array2[$i]"." ";
}

