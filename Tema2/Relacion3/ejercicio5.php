<?php
$numero = rand(20, 30);
$emoticonos = array();
$longitud = count($emoticonos);

while ($longitud < $numero){
    $emoticono = rand(128000, 128060);
    array_push($emoticonos, $emoticono);
    $longitud++;
}

echo $longitud ." animales <br>";
for ($i=0; $i<$longitud; $i++){
    echo "<span style=\"font-size: 40px;\">&#".$emoticonos[$i].";</span>"." ";
}

echo "<hr>";
$emoticonoAleatorio = $emoticonos[array_rand($emoticonos)];
echo "Emoticono eliminado <br>";
echo "<span style=\"font-size: 40px;\">&#".$emoticonoAleatorio.";</span>"." ";


for ($i = 0; $i<$numero; $i++){
    if ($emoticonos[$i]== $emoticonoAleatorio){
        unset($emoticonos[$i]);
    }
}
$emoticonos = array_values($emoticonos);
$nuevalongitud = count($emoticonos);
echo "<br>";
echo $nuevalongitud ." Animales <br>";
for ($i=0; $i<$nuevalongitud; $i++){
    echo "<span style=\"font-size: 40px;\">&#".$emoticonos[$i].";</span>"." ";
}
