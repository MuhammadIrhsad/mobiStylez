<?php

include "config.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Best Barber Shope </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="./css/SignIn.css">
</head>

<body>
    <div class="loginContainer">
        <div class="container">
            <div class="logo">
                <img src="/images/Group 3849.png" alt=" logo Image">
            </div>
            <h3 class="heading">LOGIN</h1>
                <form action="<?php echo $hostName.'sign.php' ?>" method="POST">
                    <div class="form-group">
                        <input type="email" name="email" class="form-control bi bi-person" aria-describedby="emailHelp" placeholder="Email...">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-danger btn-lg center butt">LOGIN</button>
                </form>
                <a class="fgPass" href="#">Forgot Password?</a>
                <div class="bottom-container">
                    <a href="#">Remember</a>
                    <a href="<?php echo $hostName.'choice.php' ?>">Create Account</a>
                </div>

        </div>
    </div>

</body>

</html>