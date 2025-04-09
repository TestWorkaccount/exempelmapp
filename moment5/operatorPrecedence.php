<?php

    $tal =  5 + 2 * 3;  //6+5 = 11
    $tal2 =  5 + (2 * 3);  //6+5 = 11
    $tal3 =  (5 + 2) * 3;  //7*3 = 21
    echo "$tal <br>";
    echo "$tal2 <br>";
    echo "$tal3 <br>";
    echo 4 ** 2; //4*4 = 16
    echo "<br>";
    echo +4;
    echo "<br>";
    echo -4;
    echo "<br>";
    $tal = 3;
    $tal++;
    echo $tal;
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo 5 * 2 % 3; // 10 % 1
    echo "<br>";
    echo (5 * 2) % 3; // 10 % 3 = 1
    echo "<br>";
    echo 5 * (2 % 3); // 5 * 2 = 10
    echo "<br>";
    echo 2 % 3 * 5; // 2 * 5 = 10
    echo "<br>";

    echo "<br>";
    echo "<br>";


    $total = 1 + 2 - 3 * 4 / 5 ** 6;
    $total2 = 1 + 2 - 3 * 4 / (5 ** 6);
    $total3 = 1 + 2 - 3 * 4 / (15625);
    $total4 = 1 + 2 - 3 * 4 / (15625);
    $total5 = 1 + 2 - (3 * 4) / (15625);
    $total6 = 1 + 2 - (12) / (15625);
    $total7 = 1 + 2 - (12 / 15625);
    $total8 = 1 + 2 - (0.000768);
    $total9 = 3 - (0.000768);
    $total9 = 2.999232;

    echo $total;
    echo "<br>";
    echo $total2;
    echo "<br>";
    echo $total3;
    echo "<br>";
    echo $total4;
    echo "<br>";
    echo $total5;
    echo "<br>";
    echo $total6;
    echo "<br>";
    echo $total7;
    echo "<br>";
    echo $total8;
    echo "<br>";
    echo "<br>";

$x = 10;
$y = 3;
$z = null;

//$x = 10 //y = 3
$z = $x + $y;  //$z = 10 + 3 = 13
$z = $x - $y;  //$z = 10 - 3 = 7
$z =$x * $y;   //$z = 10 * 3 = 30
$z =$x / $y;   //$z = 10 / 3 = 3.3333
$z =$x ** $y;  //$z = 10 ** 3 = 10 * 10 *10 = 1000
$z =$x % $y;   //$z = 10 % 3 = 1 

echo $z;

echo "<br>";
echo "<br>";
echo "Här är ny rader";

?>