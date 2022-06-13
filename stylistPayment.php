<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Qwigley&family=The+Nautigal&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/homeStyle.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Qwigley&family=Raleway:wght@100;300&family=The+Nautigal&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <title>Stylist payment</title>
    <style>
        /* .payment-container {  
            font-size: 1.2rem;
            width: 100%;
            height: 20%;
            background-color: rgb(203, 238, 252);
        }
        
        
        
        .heading {
            font-size: 1.8rem;
            font-weight: 500;
            font-family: 'Relway', serif;
            display: flex;
            align-items: center;
            justify-content: center;
        } */
        
        body {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .payment-container {
            min-height: 90vh;
            width: 800px;
            border: 2px solid red;
        }
        
        .ralway {
            font-family: 'Raleway', serif;
        }
        
        .logo {
            height: 70px;
            width: 110px;
        }
        
        .logo img {
            width: 100%;
        }
        
        label {
            font-size: 1.4rem;
            font-weight: 600;
        }
        
        .comment {
            font-size: .7rem;
            font-weight: 300;
        }
        
        .heading {
            min-height: 10px;
            background-color: rgb(52, 199, 7)t;
            width: 100%;
            display: flex;
        }
        
        input::placeholder {
            color: rgb(129, 117, 117) !important;
        }
    </style>
</head>

<body>
    <!-- <div class="container">

        <div class="payment-container">

            <div class="row heading ">
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                          Credit & Depit cards
                        </label>
                    </div>

                </div>
                <div class="col">
                    <div class="row">
                        <div class="logo">
                            <img style="width: 100%; height: 100%;" src="./barberImages/visaCard2.png" alt="">

                        </div>
                        <div class="logo">
                            <img style="width: 100%; height: 100%;" src="./barberImages/masterCard.png" alt="">

                        </div>
                    </div>

                </div>
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                          Cash On Delivery
                        </label>
                    </div>

                </div>
            </div>
            <div class="body">
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Example label</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Another label</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">
                </div>
            </div>

        </div>

    </div> -->
    <div class="payment-container ">
        <form class="row g-3 px-2 ralway">
            <div class="heading bg-info ">
                <div class="col-md-4 d-flex justify-content-center">
                    <div class="form-check .ralway  p-2 m-3">
                        <input class="form-check-input" type="radio" style="font-size: 1.3rem;" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label " for="flexRadioDefault1">
                          Credit & Depit cards
                          <div class="comment">
                              Transaction fee may apply!
                          </div>
                        </label>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-items-center">
                    <div class="row d-flex justify-content-around">
                        <div class="logo">
                            <img src="./barberImages/visacard2.png" alt="">

                        </div>
                        <div class="logo">
                            <img src="./barberImages/masterCard.png" alt="">

                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex justify-content-evenly">
                    <div class="form-check .ralway  p-2 m-3">
                        <input class="form-check-input" type="radio" style="font-size: 1.4rem;" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label " for="flexRadioDefault1">
                          Credit & Depit cards
                          <div class="comment">
                            Transaction fee may apply!
                          </div>
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group ">
                <div class="m-4">
                    <label for="formGroupExampleInput" class="form-label">Cardholder Name</label>
                    <input type="text" class="form-control p-3" id="formGroupExampleInput">
                </div>
                <div class="m-4">
                    <label class="form-label">Card Number</label>
                    <div class="input-group m-4" style="transform: translateX(-23px);">
                        <input type="text" class="form-control" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <span class="input-group-text" id="basic-addon2"><div style="height: 48px; width: 80px;" class="logo">
                            <img style="height: 100%; width: 100%;" src="./barberImages/visacard2.png" alt="">
    
                        </div></span>
                    </div>
                </div>
                <div class="row m-3">
                    <div class="row mt-4">
                        <div class="col-3">
                            <input type="text" class="form-control p-3" placeholder="mm" aria-label="First name">
                        </div>
                        <div class="col-3">
                            <input type="text" class="form-control p-3" placeholder="yyyy" aria-label="Last name">
                        </div>
                        <div class="col-3">
                            <input type="text" class="form-control p-3" placeholder="CVV" aria-label="Last name">
                        </div>
                    </div>
                </div>
                <div class="row m-4 ">
                    <div class="form-check p-4 m-3">
                        <input class="form-check-input " type="checkbox" style="font-size: 1.4rem;" id="gridCheck">
                        <label class="form-check-label ralway" for="gridCheck">
                          I have read and accept the terms and privacy policy.
                        </label>
                    </div>
                </div>
                <div class="row d-flex justify-content-center mb-4">
                    <button class="btn btn-danger ralway" style="width: 400px; font-size: 1.4rem; background-color: rgb(219, 85, 36);">
                        Pay Now
                    </button>
                </div>



            </div>


        </form>

    </div>
</body>

</html>