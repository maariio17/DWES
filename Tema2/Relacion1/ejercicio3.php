<?php

echo "<h1>Ecuacion 2Grado</h1>";
$a=1;
$b=-5;
$c=6;
echo "La ecuacion es: <br>";
echo "$a x<sup>2</sup>+$b x+$c <br>";
$resultado1 = (-$b+sqrt(($b*$b)-4*$a*$c))/2*$a;
echo "Resultado 1:$resultado1 <br>";
$resultado2 = (-$b-sqrt(($b*$b)-4*$a*$c))/2*$a;
echo "Resultado 2:$resultado2 <br>";