<?php
//kiem tra nut submit cua trang dang ky da dc bam chua
if (isset($_POST["btSubmit"]) == false) {
    //ve trang dang ky 
    header("location:d02_register.php");
    exit();
}
//doc lan luot cac gia tri nhap tren form dang ky va cat vao cac bien
$username = $_POST["username"];
$pass = $_POST["pass"];
$gender = $_POST["gender"];
$city = $_POST["city"];
$comment = $_POST["comment"];
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">

        <h2>Congrate ! Welcome Our New Member !</h2>
        <hr>
        <p>Your Information </p>
        Name : <?php echo $username; ?> <br>
        Password : <?php echo $pass; ?> <br>
        Gender : <?php echo $gender; ?> <br>
        City/Province : <?php echo $city; ?> <br>
        Comment : <?php echo $comment; ?> <br>

    </div>

</body>

</html>