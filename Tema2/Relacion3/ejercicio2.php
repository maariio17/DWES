<?php
$arr = array();

for ($i=0; $i<120; $i++){
    $numero = rand(0, 200);
    array_push($arr, $numero);
    echo "$arr[$i]"." ";
}



