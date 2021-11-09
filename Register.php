<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
<h1 class="text-info text-center">Firefox Poultry Farm</h1>
<div class="row">
    <div class="col-3"></div>
    <div class="col-6">
        <h3 class="text-info text-center">Register Here</h3>
        <form action="Register_handler.php" method="post">
        <input required name="x" class="form-control" type="text" placeholder="Enter Name"><br>
        <input required name="y" class="form-control" type="email" placeholder="Email"><br>
        <input required name="z" class="form-control" type="password" placeholder="Password"><br>
        <input name="btn_reg" class="btn  btn-outline-info btn-block" type="submit" value="Register">
            <a class="btn btn-block btn-outline-success" href="users.php">View Users</a>
        </form>
    </div>
    <div class="col-3"></div>
</div>
</body>
</html>