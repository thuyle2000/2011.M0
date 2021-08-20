<?php 
$x1 = 10;
$x2 = '10';
$x3 = 10; 
$x4 = 123;

echo "x1 = [$x1] <br>";
echo "x2 = ['$x2'] <br>";
echo "x3 = [$x3] <br>";
echo "x4 = [$x4] <br><br>";

echo "(x1 == x2) = " . ($x1==$x2). "<br>";
echo "(x1 == x3) = " . ($x1==$x3). "<br>";
echo "(x1 == x4) = " . ($x1==$x4). "<br><br>";

echo "(x1 === x2) = " . ($x1===$x2). "<br>";
echo "(x1 === x3) = " . ($x1===$x3). "<br>";
echo "(x1 === x4) = " . ($x1===$x4). "<br><br>";


?>