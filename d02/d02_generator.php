<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>generator</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <h2>generator demo</h2>
        <hr>
        <?php
        srand(); //ham khoi tao bo so ngau nhien se dc sinh ra

        function geneZ()
        {
            $n = rand(5, 20);

            for ($i = 0; $i < $n; $i++) {
                yield rand(1, 100);
            }

            return -1;
        }

        //test case 1
        echo "<h3> Test case 1 </h3>";
        foreach (geneZ() as $i => $v) {
            echo " $i.  $v <br>";
        }


        //test case 2
        echo "<h3> Test case 2 </h3>";
        foreach (geneZ() as $index => $value) {
            echo " $index.  $value <br>";
        }


        //test case 3
        echo "<h3> Test case 3</h3>";
        foreach (geneZ() as  $v) {
            echo " $v <br>";
        }


        ?>
    </div>
</body>

</html>