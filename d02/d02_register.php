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

        <div class="row">
            <div class="col-md-6">
                <form action="d02_register_process.php" method="POST">
                    <legend>Register</legend>
                    <div class="form-group">
                        <label for="">username</label>
                        <input type="text" class="form-control" name="username" id="username" aria-describedby="helpId" value="phat" required>
                    </div>
                    <div class="form-group">
                        <label for="">password</label>
                        <input type="password" class="form-control" name="pass" id="pass" aria-describedby="helpId" value="123" required>
                    </div>

                    <div class="form-group">
                        <label for="">gender</label>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="gender" id="gender" value="nam" checked> nam
                            </label>

                        </div>

                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="gender" id="gender" value="nu"> nu
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="">City/Province</label>
                        <select class="form-control" name="city" id="city">
                            <option value="Saigon">Saigon</option>
                            <option value="Hue">Hue</option>
                            <option value="Hanoi">Ha noi</option>
                            <option value="Cantho">Can tho</option>
                            <option value="Danang">Da nang</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Comments</label>
                        <textarea class="form-control" name="comment" id="comment" rows="3">Nothing...</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary" name="btSubmit" value="ok">Submit</button>
                    <button type="reset" class="btn btn-primary">Reset</button>

                </form>
            </div>
        </div>



    </div>
</body>

</html>