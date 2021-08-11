<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
</head>
<body>
    <h2>header() demo</h2>
    <hr>
    <?php 
    //lay gio dia phuong hien tai 
    date_default_timezone_set("Asia/Saigon");
    $hour = date("H");
    echo "<p>Bay gio la : $hour gio";
    
    if($hour>9){
        header("location:https://www.nhaccuatui.com/");
    }
    else{
        header("location:https://vnexpress.net/");
    }
    ?>
</body>
</html>