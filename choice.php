<?php
include "config.php"
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
</head>

<body class="d-flex align-items-center justify-content-center">
    <div class=" rounded-3 d-flex align-items-center justify-content-center flex-column bg-white" style="width: 450px; height: 300px;">
        <h1 class="heading ral">Register As a</h1>
        <form class="row g-3" action="<?php echo $hostName.'Register.php' ?>" method="POST" >
            <div class="col-12 d-flex align-items-center justify-content-center">
                <div class="form-check mx-3 p-3">
                    <input class="form-check-input p-2" value="1" type="radio" name="user-role" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                      Barber
                    </label>
                </div>

                <div class="form-check mx-3 p-3">
                    <input class="form-check-input p-2" value="0" type="radio" name="user-role" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                      Customer
                    </label>
                </div>

            </div>
            <div class="col-12 d-flex align-items-center justify-content-center">
                <button type="submit" class="btn btn-danger">Continue</button>
            </div>
        </form>
    </div>
</body>

</html>