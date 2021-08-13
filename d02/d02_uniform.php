<?php
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>uniform</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <h2>Uniform variable demo</h2>
        <hr>

        <?php
        function f1()
        {
            echo "ham thu nhat f1() <br>";
            return f2;
        }

        function f2()
        {
            echo "ham thu nhat f2() <br>";
            return f3;
        }

        function f3()
        {
            echo "ham thu nhat f3() <br>";
        }

        //goi ham
        f1()()();
        echo "* * * * * * <br>";


        ?>

    </div>
</body>

</html>