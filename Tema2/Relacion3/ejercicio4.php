<?php

$array1 = array();
$array2 = array();
$array3 = array();

$longitud1 = count($array1);
$longitud2 = count($array2);
$longitud3 = count($array3);

while ($longitud1<20){
    $numero = rand(0, 100);
    array_push($array1, $numero);
    $longitud1++;
}

while ($longitud2<20){
        for ($i=0; $i<$longitud1; $i++){
            $numero = $array1[$i];
            $numañadir = pow($numero, 2);
            array_push($array2, $numañadir);
        }
    $longitud2++;
}

while ($longitud3<20){
        for ($i=0; $i<$longitud1; $i++){
            $numero = $array1[$i];
            $numañadir = pow($numero, 3);
            array_push($array3, $numañadir);
        }
    $longitud3++;
}

echo "<hr>";
echo "<table>";
echo "<tr>";
echo "  <th> Array 1  </th>";
echo "  <th> Array 2 </th>";
echo "  <th> Array 3  </th>";
echo "</tr>";
echo "<tr>  <td>" . $array1[0] . "</td> <td>" . $array2[0] ."</td> <td>" . $array3[0] . "</td>  </tr>" ;
echo "<tr>  <td>" . $array1[1] . "</td> <td>" . $array2[1] ."</td> <td>" . $array3[1] . "</td> </tr>" ;
echo "<tr>  <td>" . $array1[2] . "</td> <td>" . $array2[2] ."</td> <td>" . $array3[2] . "</td> </tr>" ;
echo "<tr>  <td>" . $array1[3] . "</td> <td>" . $array2[3] ."</td> <td>" . $array3[3] . "</td> </tr>" ;
echo "<tr>  <td>" . $array1[4] . "</td> <td>" . $array2[4] ."</td> <td>" . $array3[4] . "</td> </tr>" ;
echo "<tr>  <td>" . $array1[5] . "</td> <td>" . $array2[5] ."</td> <td>" . $array3[5] . "</td> </tr>" ;
echo "<tr>  <td>" . $array1[6] . "</td> <td>" . $array2[6] ."</td> <td>" . $array3[6] . "</td> </tr>" ;
echo "<tr>  <td>" . $array1[7] . "</td> <td>" . $array2[7] ."</td> <td>" . $array3[7] . "</td> </tr>" ;
echo "<tr>  <td>" . $array1[8] . "</td> <td>" . $array2[8] ."</td> <td>" . $array3[8] . "</td> </tr>" ;
echo "<tr>  <td>" . $array1[9] . "</td> <td>" . $array2[9] ."</td> <td>" . $array3[9] . "</td> </tr>" ;
echo "<tr>  <td>" . $array1[10] . "</td> <td>" . $array2[10] ."</td> <td>" . $array3[10] . "</td> </tr>" ;
echo "<tr>  <td>" . $array1[11] . "</td> <td>" . $array2[11] ."</td> <td>" . $array3[11] . "</td> </tr>" ;
echo "<tr>  <td>" . $array1[12] . "</td> <td>" . $array2[12] ."</td> <td>" . $array3[12] . "</td> </tr>" ;
echo "<tr>  <td>" . $array1[13] . "</td> <td>" . $array2[13] ."</td> <td>" . $array3[13] . "</td> </tr>" ;
echo "<tr>  <td>" . $array1[14] . "</td> <td>" . $array2[14] ."</td> <td>" . $array3[14] . "</td> </tr>" ;
echo "<tr>  <td>" . $array1[15] . "</td> <td>" . $array2[15] ."</td> <td>" . $array3[15] . "</td> </tr>" ;
echo "<tr>  <td>" . $array1[16] . "</td> <td>" . $array2[16] ."</td> <td>" . $array3[16] . "</td> </tr>" ;
echo "<tr>  <td>" . $array1[17] . "</td> <td>" . $array2[17] ."</td> <td>" . $array3[17] . "</td> </tr>" ;
echo "<tr>  <td>" . $array1[18] . "</td> <td>" . $array2[18] ."</td> <td>" . $array3[18] . "</td> </tr>" ;
echo "<tr>  <td>" . $array1[19] . "</td> <td>" . $array2[19] ."</td> <td>" . $array3[19] . "</td> </tr>" ;
echo "</table>";