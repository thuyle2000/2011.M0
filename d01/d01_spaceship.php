<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>spaceship</title>
</head>
<body>
    <h2>Spaceship (<=>) demo  </h2>
    <hr>
    <?php  
        $x1 = 10; $x2 =20; $x3=10;
        echo "x1 = $x1, x2= $x2, x3= $x3 <br>";
        echo " (x1 <=> x2) = " . ($x1<=>$x2) . "<br>";
        echo " (x2 <=> x1) = " . ($x2<=>$x1) . "<br>";
        echo " (x1 <=> x3) = " . ($x1<=>$x3) . "<br><br>";


        $s1="Tam"; $s2="Kiet"; $s3="Tam Nhu";
        echo "s1 = $s1, s2= $s2, s3= $s3 <br>";
        echo " (s1 <=> s2) = " . ($s1<=>$s2) . "<br>";
        echo " (s2 <=> s1) = " . ($s2<=>$s1) . "<br>";
        echo " (s1 <=> s3) = " . ($s1<=>$s3) . "<br>";

    ?>
</body>
</html>