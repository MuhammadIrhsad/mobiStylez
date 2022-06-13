<?php
    include "config.php";
    if(isset($_POST['user-role']))
    {
         $role=$_POST['user-role'];
    }
    else{
        echo "You Don't Select Your User Mode.";
        echo'<a href="choice.php">Select Mode</a>';
        die();
    }
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="./css/registerStyle.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <style>
        body{
            height: 100vh;
            width: 100vw;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        body::before{
            content: "";
    background: url("../barberImages/signIn.png") no-repeat center center/cover;
    /* background-color: url("../images/signIn.png") no-repeat center center/cover ; */
    position: absolute;
    top: 0px;
    left: 0px;
    height: 100%;
    width: 100%;
    z-index: -1;
        }
    </style>
</head>

<body>
    <div class="border bg-white rounded-3 d-flex align-items-center justify-content-center flex-column" style="height: 400px; width:600px; transform:translateX(-160px);">
        <h1 class="heading">sign up</h1>
        <form class="row g-3 md-4 m-2" action="<?php echo $hostName.'reg.php'?>" method="POST" enctype="multipart/form-data">
            <div class=" col-12  my-3">
                <input hidden type="text" placeholder="User role" class="form-control" name="user-role" value="<?php echo $role ?>" id="full-name" required>
            </div>
            <div class=" col-12 col-md-6 my-3">
                <input type="text" placeholder="Your FullName" class="form-control" name="full-name" required>
            </div>
            <div class=" col-12 col-md-6 my-3">
                <input class="form-control" type="file" value="ProfileImage" name="profile-image" required id="profile-image">
            </div>
            <div class=" col-12 col-md-6 my-3">
                <input type="text" class="form-control" placeholder="Address" name="address" id="address" required>
            </div>
            <div class=" col-12 col-md-6 my-3">
                <input type="text" class="form-control" placeholder="Phone" name="phone" id="phone" required>
            </div>
            <div class=" col-12 col-md-6 my-3">
                <input type="email" class="form-control" placeholder="Email" name="email" id="Email" required>
            </div>
            <div class=" col-12 col-md-6 my-3">
                <input type="password" class="form-control" placeholder="Password" name="password" id="address" required>
            </div>

            <div class="col-12 d-flex align-items-center justify-content-center">
                <button type="submit" class="btn btn-danger">register</button>
            </div>
        </form>
    </div>

</body>

</html>