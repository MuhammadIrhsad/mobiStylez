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
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Qwigley&family=Raleway:wght@100;300&family=The+Nautigal&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">


    <title>Stylist Services</title>
    <style>
        body {
            background-color: white;
        }
        
        .heading {
            font-family: 'Qwigley', sans-serif;
            color: rgb(219, 3, 3);
            height: 20%;
            background-color: rgb(234, 229, 238);
            font-size: 60px;
        }
        
        .title {
            font-family: 'Raleway', serif;
        }
        
        .title-image {
            height: 20%;
            width: 80%;
        }
        
        .content-container {
            height: 60vh;
            width: 100vw;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
        
        .image-container {
            height: 80%;
            width: 60%;
        }
        
        .image-container img {
            object-fit: cover;
            height: 100%;
            width: 100%;
        }
        
        .price-table {
            height: 30%;
            width: 61%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .price-row {
            width: 100%;
            padding: 8px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        
        .qwi {
            font-family: 'Qwigley', sans-serif;
        }
        
        .ral {
            font-family: 'Raleway', serif;
        }
    </style>

</head>

<body>
    <nav style="width: 100vw;" class="navbar navbar-expand-lg navbar-light bg-danger pb-0">
        <div id="logo">
            <img src="./barberImages/logo.png" alt="Mobi Stylez">
            <h1 class="qwi text-white logoHeading">mobiStylez</h1>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav">
                <li class="nav-item active">
                    <h3><a class="qwi  text-white  nav-link" href="./home.html">Home </a></h1>
                </li>
                <li class="nav-item">
                    <h3><a class="qwi text-white  nav-link" href="./stylist.html">Stylist</a></h1>
                </li>
                <li class="nav-item ">
                    <h3><a class="qwi text-white  nav-link" href="./stylist-services.html">Service </a></h1>
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
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="d-flex justify-content-end">
                <button class="border text-white  btn ral mx-1 ">California, USA <span class="ms-4 "><i class="far fa-compass"></i></span></button>
                <button class="btn btn-transparent rounded-circle mx-1" style="width: 45px;">
                    <i class=" text-white far fa-bell" style="font-size: 1.3rem;"></i>
                </button>
                <button class="btn btn-primary mx-1 " style="width: 90px;">Register</button>

                <li class="nav-item dropdown" style="list-style:none;">
                    <a class="nav-link dropdown-toggle p-0 text-white" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <button class="btn btn-primary rounded-circle ms-1" style="width: 42px;">MI</button>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <header>
        <h1 class="heading text-center ">
            Services
        </h1>

        <div class="content-container mt-0">
            <h2 class="title text-center mb-4">
                Beard trim & Style
            </h2>
            <div class="image-container">
                <img src="./barberImages/image1.png" alt="">
            </div>
        </div>
    </header>
    <section class="my-4" style="display: flex;flex-direction:column;transform: translateX(-1.8%); justify-content: center; align-items: center;">
        <div class="price-table my-4">
            <div class="price-row" style="color:white;background-color: rgb(243, 35, 35);">
                <h4 class="text-start  ral px-3">Service</h4>
                <h4 class="text-start ral px-4">Price</h4>
            </div>
            <div class="price-row border">
                <h4 class="text-start  ral px-3">Full Beard Triming</h4>
                <h4 class="text-start ral px-4">50$</h4>
            </div>
            <div class="price-row border">
                <h4 class="text-start  ral px-3">Simple Triming</h4>
                <h4 class="text-start ral px-4">40$</h4>
            </div>
            <div class="price-row border">
                <h4 class="text-start  ral px-3">Cleaning</h4>
                <h4 class="text-start ral px-4">30$</h4>
            </div>
        </div>
        <button class="btn btn-secondary text-center p-3 my-4" style="width: 40%;">Book your Appointment</button>
        <div class="bottom-text mb-4  " style="width:70%">
            <p class="text-center my-4 pb-4" style=" font-weight: 500; font-size: 20px;">Lorem consectetur adipisicing elit. Fugiat sapiente delectus inventore consequatur amet repellat iusto veniam reprehenderit vero esse porro distinctio cum aperiam laboriosam adipisci voluptatibus rerum voluptate ullam corrupti id atque excepturi,
                nesciunt modi doloremque nemo molestiae dolor autem, culpa amet deserunt repellat asperiores magni earum repellendus ab distinctio quasi hic.
            </p>

        </div>
    </section>
    <div class="row mt-4  border-info border " style="min-height: 300px;">
        <div class="col-12 col-md-6 col-lg-3 m-0 p-0 my-auto  d-block border-right-0 border-secondary">
            <div class="row">
                <div class="col-4 text-end">
                    <img src="./barberImages/logo.png" class="img-fluid" alt="">
                </div>
                <div class="col-8 text-start ">
                    <h1 class="heading-style me-3" style="font-size:3rem">
                        Mobi Stylez
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="text-center text-dark " style="font-size: 2rem;">
                    <span class=" text-warning p-3 fa fa-star"></span>
                    <span class=" text-warning p-3 fa fa-star"></span>
                    <span class=" text-warning p-3 fa fa-star"></span>
                    <span class=" text-warning p-3 fa fa-star"></span>
                </div>
            </div>

        </div>
        <div class="col-12 col-md-6 col-lg-3 m-0 p-0 my-auto d-block  border-right-0 border-secondary">
            <div class="row py-3 text-center text-lg-start">
                <h3 class="py-3">
                    Features
                </h3>
                <h6>
                    Beginner Guid
                    </6>
                    <h6>
                        Move to survion
                    </h6>
                    <h6>
                        Website builder
                    </h6>
                    <h6>
                        Tools and resources
                    </h6>

            </div>

        </div>
        <div class="col-12 col-md-6 col-lg-3 m-0 p-0 my-auto  d-block border-right-0 border-secondary">
            <div class="row py-3 text-center text-lg-start">
                <h3 class="py-3">
                    Hosting
                </h3>
                <h6>
                    Shared hosting
                    </65>
                    <h6>
                        Vps hosting
                    </h6>
                    <h6>
                        Cloud hosting </h6>
                    <h6>
                        Wordpress hosting
                    </h6>

            </div>

        </div>
        <div class="col-12 col-md-6 col-lg-3 m-0 p-0 my-auto  d-block border-right-0 border-secondary">
            <div class="row text-center text-lg-start">
                <h3 class="py-3">
                    Contact Us Via
                </h3>
                <h6>Email</h6>
                <h6>Messenger</h6>
                <h6>Instagram</h6>

            </div>

        </div>

    </div>
    <div class="row text-center">
        <div class="col-12 mx-auto d-block pb-10">
            <h1 class="para-style text-center"> <span class="p-2 m-4">Term of service</span> <span class="   p-2 m-4"> Privacy service</span></h1>
        </div>
    </div>




</body>

</html>