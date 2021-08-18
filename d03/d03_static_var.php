<?php 
echo "<h2>Demo Static Variable</h2>";
echo "<hr>";

// chay ham counter_local() 5 lan
for ($i=0; $i <5 ; $i++) { 
   counter_local();
}

echo "<hr>";

// chay ham counter_static() 5 lan
for ($i=0; $i <5 ; $i++) { 
    counter_static();
}



function counter_local(){
    $count = 1;
    echo "in counter_local(): count = " . $count. "<br>";
    $count ++;
}

function counter_static(){
    static $count = 1;
    echo "in counter_static(): count = " . $count. "<br>";
    $count ++;
}