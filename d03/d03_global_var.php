<?php 
echo "<h2>Demo Global Variable</h2>";
echo "<hr>";

$n = 10; $m=20;
echo "<p>Bat dau chuong trinh </p>";
echo "n = $n <br>";
echo "m = $m <br>";

//goi ham change de thay doi gia tri cua 2 bien m va n
change();

//in lai gia tri cua m va n sau khi ham change() duoc goi
echo "<p>Sau khi ham change() duoc thi hanh </p>";
echo "n = $n <br>";
echo "m = $m <br>";


function change(){
    global $m, $n;
    $m = 10;
    $n = 20;

    echo "<p>Trong ham change() </p>";
    echo "n = $n <br>";
    echo "m = $m <br>";
}
