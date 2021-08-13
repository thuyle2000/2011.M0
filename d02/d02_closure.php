<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>closure</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h2>closure demo</h2>
        <hr>

        <?php 
        class Greeting{
            private $s1 = "Hello, ";
            private $s = "Xin chao, ";
        }
        
        class Farewell{
            private $s2 = "Goodbye, ";
            private $s = "Tam biet, ";
        }
        
        //dinh nghia 1 ham closure - ham vo danh
        $f = function($m){
            echo $this->s . $m . "! <br>";
        };


        //goi ham closure o tren voi cac doi tuong duoc tao ra tu class Greeting va Farewell
        $o1 = new Greeting;
        $o2 = new Farewell;

        $f->call($o1, "Tam");
        $f->call($o2, "Nam");


        ?>
    </div>
</body>
</html>