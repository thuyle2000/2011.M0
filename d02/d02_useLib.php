<?php 
include_once "d02_lib.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>use</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
    <h2>using - namespace demo</h2>
    <hr>
    <?php 
        //lenh khai bao co su dung cac class va function trong namespace M02011
        use M02011\Student;
        use function M02011\factorial;

        //khai bao cac bien doi tuong sinh vien
        $sv1 = new Student();
        $sv2 = new Student("S02");
        $sv3 = new Student("S03", "Tam");

        //in thong tin sinh vien sv1, sv2, sv3
        $sv1->display();
        $sv2->display();
        $sv3->display();  

        //tinh giai thua cua cac gia tri tu 1->20;
        echo "<hr>";
        for($i=1 ; $i<=20; $i++){
            factorial($i);
        }

    ?>

    </div>
</body>
</html>