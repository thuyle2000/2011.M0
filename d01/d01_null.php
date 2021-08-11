<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>null</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
    <h2>Null coalescing demo</h2>
    <hr>
    <?php 
        $s1 = "Phat";
        $m1 = $s1 ?? "Xuan";
        $m2 = $s2 ?? "Tam";
        
        echo "Hello, " . $m1 ."<br>";
        echo "Hello, " . $m2 ."<br>";
    ?>
    </div>
</body>
</html>