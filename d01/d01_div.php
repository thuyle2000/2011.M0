<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>div</title>
</head>

<body>
    <h2>operator / demo</h2>
    <hr>
    <?php
        $x = 10;
        $y = 3;
        $r1 = $x / $y;
        echo "x = $x , y = $y <br>";
        echo "x / y = $r1 <br>";
    ?>

    <hr>
    <h2> intdiv() demo</h2>
    <hr>
    <?php
        $r2 = intdiv($x, $y);
        echo "x = $x , y = $y <br>";
        echo "intdiv(x,y) = $r2 <br>";
    ?>   
</body>

</html>