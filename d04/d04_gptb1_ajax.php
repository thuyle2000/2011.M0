<?php 
//kiem tra trang duoc submit chua
if(isset($_GET["btOK"])){
    $a = $_GET["hsa"];
    $b = $_GET["hsb"];

    $m = "<p> >> PT bac 1: ". $a. "x + " . $b. "= 0 <p>";
    echo $m;

    if($b == 0){
        if($a==0){
            echo " >> PT vo so nghiem ! <br>";
        }
        else{
            echo " >> PT vo nghiem ! <br>";
        }
    }
    else{
        echo " >> Nghiem cua PT la ". (-$b/$a) ." ! <br>";
    }
    exit();
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GPTB1</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <h2>Giai phuong trinh bac 1: ax + b = 0</h2>
        <hr>

        <div class="row">
            <div class="col-md-6">
                <form action="" name="formPTB1" id="formPTB1">
                    <div class="form-group">
                        <label for="">he so a</label>
                        <input type="number" class="form-control" name="hsa" id="hsa" value="2" required>
                    </div>

                    <div class="form-group">
                        <label for="">he so b</label>
                        <input type="number" class="form-control" name="hsb" id="hsb" value="3" required>
                    </div>

                    <button type="submit" class="btn btn-primary" name="btOK">Submit</button>
                </form>


                <div id="ketqua">

                </div>
            </div>
        </div>
    </div>

    <script>
        jQuery(function($){
            $("#formPTB1").submit(function(e){
                e.preventDefault();
                let a = $("#hsa").val();
                let b = $("#hsb").val();

                $.ajax({
                    type: "get",
                    url: "d04_gptb1_ajax.php",
                    data: {hsa:a, hsb:b,btOK:1 },
                    // dataType: "text",
                    success: function (response) {
                        console.log(response);
                        $("#ketqua").html(response);
                    }
                });


            });


        });

    </script>


</body>

</html>