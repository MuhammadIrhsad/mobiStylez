<?php
include "config.php";
session_start();
if (isset($_SESSION['user'])) {
    $btnText = "Logout";
    $newHostName = $hostName . "logout.php";
    $id = $_SESSION['id'];
    $sql1 = "SELECT * FROM user WHERE user_id={$id}";

    $res1 = mysqli_query($conn, $sql1);
    $row1 = mysqli_fetch_assoc($res1);
} else {
    $btnText = "Login";
    $newHostName = $hostName . "SignIn.php";
}
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobi Stylez Barber Shope</title>
    <link rel="stylesheet" href="./css/header.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Qwigley&family=The+Nautigal&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/homeStyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Qwigley&family=Raleway:wght@100;300&family=The+Nautigal&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .bage {
            font-size: 8px;
            position: absolute;
            top: -10px;
            right: -10px;
            padding: 3px 5px;
            border-radius: 50%;
            background-color: green;
            color: white;
        }
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-danger" style="width: 100wh;">
        <div class="container-fluid nav">
            <div class="ms-5" id="logo">
                <img src="./barberImages/logo.png" alt="Mobi Stylez">
                <h1 class="qwi text-white logoHeading">mobiStylez</h1>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <h3><a class="qwi  text-white  nav-link" href="<?php echo $hostName . 'index.php'; ?>">Home </a></h1>
                    </li>
                    <li class="nav-item">
                        <h3><a class="qwi text-white  nav-link" href="<?php echo $hostName . 'stylist.php'; ?>">Stylist</a></h1>
                    </li>
                    <li class="nav-item ">
                        <h3><a class="qwi text-white  nav-link" href="<?php echo $hostName . 'stylist-services.php'; ?>">Service </a></h1>
                    </li>
                    <li class="nav-item">
                        <h3><a class="qwi text-white  nav-link" href="./stylist-booking.html">Book now</a></h1>
                    </li>
                    <li class="nav-item ">
                        <h3><a class="qwi  text-white nav-link" href="#stylist">About us </a></h1>
                    </li>
                    <li class="nav-item">
                        <h3><a class="qwi text-white  nav-link" href="#contact">Contact us</a></h1>
                    </li>
                </ul>
            </div>
            <ul class="navbar-nav d-flex justify-content-end">
                <!-- <button class="border text-white  btn ral mx-1 ">Punjab, PAK <span class="ms-4 "><i class="fa-solid fa-location-crosshairs"></i></span></button> -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="text-white far fa-bell " style="font-size: 1.3rem; position:relative"><span class="bage">3</span></i>
                    </a>
                    <ul id="notification" class="dropdown-menu" aria-labelledby="navbarDropdown">
                       
                    </ul>
                </li>
                <a href="<?php echo $newHostName ?>" class="btn btn-primary mx-1 " style="width: 90px;"><?php echo $btnText ?></a>
                <!-- <li class="nav-item dropdown" style="list-style:none;">
                    <a class="nav-link dropdown-toggle p-0 text-white" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <button class="btn btn-primary rounded-circle ms-1" style="width: 42px;">MI</button>
                    </a>
                </li> -->
                <?php
                if (isset($_SESSION['user'])) {
                    echo "<a class='text-white' href='{$hostName}stylistInfo.php?id={$id}'>  <img class='rounded-circle' src='./upload/{$row1['user_image']}' style='width: 40px;height:40px '>  {$row1['user_fullname']}</a> ";
                }
                ?>
            </ul>
            <!-- <button class="btn btn-primary">Submission</button> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <script src="./js/jquery-3.6.0.js"></script>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js " integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM " crossorigin="anonymous "></script>
    <script>
        $("document").ready(function(){
            setInterval(() => {
                $.ajax({
                    url:"load-notification.php",
                    type:"GET",
                    success:function(data){
                        $("#notification").html(data);
                    }
                })
            }, 1000);
        })
    </script>

</body>

</html>