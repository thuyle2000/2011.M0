<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">

        <form action="d02_login_get_process.php" >
            <legend>Login</legend>
            <div class="form-group">
                <label for="">username</label>
                <input type="text" class="form-control" name="username" id="username" aria-describedby="helpId" 
                required>
            </div>
            <div class="form-group">
                <label for="">password</label>
                <input type="password" class="form-control" name="pass" id="pass" aria-describedby="helpId" required>
            </div>

            <button type="submit" class="btn btn-primary" name="btSubmit" value="ok">Submit</button>
            <button type="reset" class="btn btn-primary">Reset</button>

        </form>

    </div>
</body>

</html>
<!-- http://localhost:8080/2011.M0/d02/d02_login.php?username=abc&pass=123&btSubmit=ok -->