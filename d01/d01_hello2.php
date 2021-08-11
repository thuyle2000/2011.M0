<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php intro</title>
</head>
<body>
    <h2>PHP Introduction</h2>
    <hr>
    <?php 

    $m = "<h3>Hello, I'm PHP Newbie !!!</h3>";
    echo $m;

    //in ngay hien tai
    echo "<p>Today is " . gmdate("M d Y") . "</p>";

    //in ra gio hien tai o vn
    date_default_timezone_set('Asia/Saigon');
    echo "<p>It is " . date("H:i:s") . "</p>";

    ?>
</body>
</html>