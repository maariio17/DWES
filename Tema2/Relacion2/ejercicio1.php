<?php

function sumar($num1, $num2){
    $suma = $num1+$num2;
    return $suma;
}

function restar($num1, $num2){
    $resta = $num1-$num2;
    return $resta;
}

function multiplicar($num1, $num2){
    $multiplicacion = $num1*$num2;
    return $multiplicacion;
}

function dividir($num1, $num2){
    $division = $num1/$num2;
    return $division;
}

function calculador ($operacion, $num1, $num2){
    $operacion = "";
    if ($operacion=="sumar"){
        echo sumar($num1, $num2);
    } else{
        if ($operacion="resta") {
            echo restar($num1, $num2);
        } else{
            if ($operacion== "multiplicar"){
                echo multiplicar($num1, $num2);
            } else{
                if ($operacion=="dividir"){
                    echo dividir($num1, $num2);
                }
            }
        }
    }
}

calculador($_GET["operacion"], $_GET["num1"], $_GET["num2"]);

