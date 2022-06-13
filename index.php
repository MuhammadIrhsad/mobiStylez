<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobi Stylez Barber Shope</title>
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
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


</head>

<body>
    
    <?php
    include "header.php";

    ?>
    <div id="home">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./barberImages/image1.png" class="d-block w-100" alt="Mobi Stylez">
                    <div class="carousel-caption d-block">
                        <h4>We Provide Overself</h4>
                        <h1 class="customFont">Perfect Stylist's</h1>
                        <p>Are you searching the new stylist? Maybe the perfect stylist.</p>
                        <div class="sliderbutton">
                            <button class="btn btn-danger">Book Now</button>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./barberImages/image2.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-block">
                        <h4>We Provide Overself</h4>
                        <h1 class="customFont">Perfect Stylist's</h1>
                        <p>Are you searching the new stylist? Maybe the perfect stylist.</p>
                        <div class="sliderbutton">
                            <button class="btn btn-danger">Book Now</button>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./barberImages/image8.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-block">
                        <h4>We Provide Overself</h4>
                        <h1 class="customFont">Perfect Stylist's</h1>
                        <p>Are you searching the new stylist? Maybe the perfect stylist.</p>
                        <div class="sliderbutton">
                            <button class="btn btn-danger">Book Now</button>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div id="service">
        <p class="mt-0 mt-md-5">What we provide at</p>
        <h1 class="customFont">Mobi Stylez</h1>
        <div class="service-container ">
            <div class="service-image  " id="img1">
                <button class="button" id="b1">Beard Stylist</button>
            </div>
            <div class="service-image " id="img2">
                <button class="button" id="b2">Hair_Cut Stylist</button>
            </div>
            <div class="service-image " id="img3">
                <button class="button" id="b3">Hair_Color Stylist</button>
            </div>
            <div class="service-image " id="img4">
                <button class="button" id="b4">Hair-Clean Stylist</button>
            </div>
        </div>
    </div>
    <div id="barber-app">
        <div class="app-detail">
            <img src="./barberImages/phone.png" alt="barber stylez App">
            <div class="app-detail-info">
                <h3>
                    Get the <span>Mobi Stylez</span> app
                </h3>
                <h3>
                    visit App Store to Download mobi Stylezh officail app.
                </h3>
                <div class="info-logo">
                    <img src="./barberImages/Group -10.png" alt="">
                </div>
            </div>

        </div>

    </div>
    <section id="stylist">
        <div class="stylist-intro mx-2 mt-0">
            <p class="para-style">Meat the incredible</p>
            <h1 class="heading-style">
                mobi Stylist's
            </h1>
            <p class="detail-para text-center m-5">it takes years of service, dedication, passion and the most important determination to become a stylist at mobi stylez. Our Professionals are here to provide you with the best service and comfort</p>
        </div>

        <div class="container-fluid m-2">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-3 ">
                    <div class="card border-0">
                        <img src="./barberImages/Rectangle -8.png" alt="mobi stylez card">
                        <h1 class="para-style">Jhon Will</h1>
                        <h2 class="heading-style">Hair_cut Professional Stylist</h2>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card border-0">
                        <img src="./barberImages/Rectangle -7.png " class="img-fluid" alt="mobi stylez card">
                        <h1 class="para-style">Jhon Will</h1>
                        <h2 class="heading-style">Hair_cut Professional Stylist</h2>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card border-0">
                        <img src="./barberImages/Rectangle -1.png" alt="mobi stylez card">
                        <h1 class="para-style">Jhon Will</h1>
                        <h2 class="heading-style">Hair_cut Professional Stylist</h2>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card border-0">
                        <img src="./barberImages/Rectangle -2.png" alt="mobi stylez card">
                        <h1 class="para-style">Jhon Will</h1>
                        <h2 class="heading-style">Hair_cut Professional Stylist</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="price">
        <div class="price-heading">
            <p class="para-style">Here are some of</p>
            <h1 class="heading-style">
                Our Pricing
            </h1>
        </div>
        <div class="container-fluid ">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="col-12 col-md-6  d-flex justify-content-center">
                    <div class="price-item">
                        <h3>Simple HairCut</h3>
                        <h4>40$</h4>
                    </div>
                </div>
                <div class="col-12 col-md-6 d-flex justify-content-center">
                    <div class="price-item">
                        <h3>Beard trim</h3>
                        <h4>20$</h4>
                    </div>
                </div>
                <div class="col-12 col-md-6  d-flex justify-content-center">
                    <div class="price-item">
                        <h3>Cheap Haircut</h3>
                        <h4>30$</h4>
                    </div>
                </div>
                <div class="col-12 col-md-6  d-flex justify-content-center">
                    <div class="price-item">
                        <h3>Hair Color</h3>
                        <h4>140$</h4>
                    </div>
                </div>
                <div class="col-12 col-md-6  d-flex justify-content-center">
                    <div class="price-item">
                        <h3>Classic Hair_cut</h3>
                        <h4>120$</h4>
                    </div>
                </div>
                <div class="col-12 col-md-6  d-flex justify-content-center">
                    <div class="price-item">
                        <h3>Facial Massage</h3>
                        <h4>150$</h4>
                    </div>
                </div>
                <div class="col-12 col-md-6  d-flex justify-content-center">
                    <div class="price-item">
                        <h3>Head Massage</h3>
                        <h4>30$</h4>
                    </div>
                </div>
                <div class="col-12 col-md-6  d-flex justify-content-center">
                    <div class="price-item">
                        <h3>Hair Stylizing</h3>
                        <h4>50$</h4>
                    </div>
                </div>
            </div>

        </div>

    </section>
    <section id="location">
        <p class="para-style center ">You can find Your</p>
        <h1 class="heading-style center">Mobi stylist</h1>
        <div id="map-container-google-1" class="z-depth-1-half map-container">
            <iframe src="https://maps.google.com/maps?q=kingitsol&t=&z=16&ie=UTF8&iwloc=&output=embed" frameborder="0" style="width: 100vw;
            height: 68vh;" allowfullscreen></iframe>
        </div><br>
    </section>
    <section id="contact">
        <div class="contact-heading">
            <h2 class="para-style">We are available 24/7</h2>
            <h1 class="para-style">
                Book Your Stylist
            </h1>
            <p class="para-style">
                We are providing perfect stylist at your own place with all kind of services and also Covid-19 sop's.
            </p>
        </div>
        <form class="row my-4 g-3 w-75">
            <div class="row">
                <div class="col-md-6">
                    <input type="text" class="form-control p-2 m-3 shadow" placeholder="Name.." id="inputEmail4">
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control p-2 m-3 shadow" placeholder="Email" id="inputPassword4">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <input type="text" class="form-control p-2 m-3 shadow" placeholder="Contact Number" id="inputEmail4">
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control p-2 m-3 shadow" placeholder="Country" id="inputPassword4">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="input-group shadow m-3">
                        <div class="input-group-text p-3 "><i style="font-size: 2rem;" class="text-primary fas fa-map-marker-alt"></i></div>
                        <input type="text" class="form-control p-4" id="specificSizeInputGroupUsername" placeholder="Drop Your Location">
                    </div>
                </div>
                <div class="col-md-6">
                    <input type="time" class="form-control bg-transparent text-white p-4 m-3 shadow" id="inputPassword4">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <input type="text" class="form-control p-2 m-3  mb-0 shadow" placeholder="Select Your Stylist" id="inputEmail4">


                </div>
                <div class="col-md-6">
                    <div class="p-2 m-2">
                        <button class="btn bg-transparent text-white border-1  border-white rounded-3 p-2">Submit</button>
                    </div>
                </div>
            </div>
        </form>

    </section>
    <section id="comment">

        <div class="container my-5 text-center d-flex align-items-center justify-content-center" style="min-height: 100vh;">

            <div id="feedback" class="row p-4" style="background-color: aqua; width: 90%;">
                <!-- Heading -->
                <div class="col-12 my-auto">
                    <h1 class="para-style " style="font-size: 2rem; font-weight: bold;">
                        Valued customers with Valued feedback.
                    </h1>
                    <p class="para-style">
                        Feedback from our happy users. Become one of them.
                    </p>

                </div>
                <!-- Comments -->
                <div class="row d-flex justify-content-center align-items-center" style="width: 80vw;">
                    <div class="col-sm-12 col-md-6">
                        <div class="row">
                            <div class="col-2">
                                <img class="img-fluid rounded-circle" src="./barberImages/Rectangle -6.png" alt="">

                            </div>
                            <div class="col-10">
                                <div class="text-start text-warning">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                                <p class="text-start">
                                    Tenetur iure dolore consequuntur doloribus sunt, laudantium saepe fuga eveniet in illum vel dolor error nihil ipsam, praesentium rem voluptatem ipsum asperiores
                                </p>
                                <h5 class="text-start">
                                    Erick Mark
                                    </h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="row">
                            <div class="col-2">
                                <img class="img-fluid rounded-circle" src="./barberImages/Rectangle -5.png" alt="">

                            </div>
                            <div class="col-10">
                                <div class="text-start text-warning">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                                <p class="text-start">
                                    Tenetur iure dolore consequuntur doloribus sunt, laudantium saepe fuga eveniet in illum vel dolor error nihil ipsam, praesentium rem voluptatem ipsum asperiores
                                </p>
                                <h5 class="text-start">
                                    Jazmin Clark
                                    </h1>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>

    <!-- Bottom -->
    <section id="footer">
        <div class="container-fluid d-flex align-items-center justify-content-center text-center" style="min-height: 100vh; width: 100vw;">
            <div class="row">
                <div class="col-12  d-flex align-items-center justify-content-center" style="height: 80vh;">

                    <div class="col-9">
                        <div class="row p-3 text-white text-start  rounded-3" style="background-color: rgb(194, 193, 131);">
                            <div class="col-12">
                                <h3 class="text ral start">Register Your Email To Get Latest Updates</h3>
                            </div>
                            <div class="row p-3">
                                <div class="col-12 col-lg-6">
                                    <p class="ral text-start">
                                        " We are provid perfect stylist at your own place with all kind of services and also Covid-19 sop's"
                                    </p>

                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control bg-transparent" placeholder="Enter Your Email" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                        <div class="input-group-append bg-transparent">
                                            <span class="input-group-text" id="basic-addon2"><button class="btn btn-success  w-100">Confirm</button></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center ">
                    <div class="row p-5  border-info border " style="min-height: 300px;">
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
                                <div class="text-center " style="font-size: 2rem;">
                                    <span class=" p-3 fa fa-facebook"></span>
                                    <span class=" p-3 fa fa-instagram"></span>
                                    <span class=" p-3 fa fa-twitter"></span>
                                    <span class=" p-3 fa fa-youtube"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 m-0 p-0 my-auto d-block  border-right-0 border-secondary">
                            <div class="row py-3 text-sm-center text-lg-start">
                                <h3 class="py-3">
                                    Features
                                </h3>
                                <h6>
                                    Beginner Guid
                                    </65>
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
                            <div class="row py-3 text-sm-center text-lg-start">
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
                            <div class="row text-sm-center text-lg-start">
                                <h3 class="py-3">
                                    Contact Us Via
                                </h3>
                                <h5>Email</h5>
                                <h5>Messenger</h5>
                                <h5>Instagram</h5>

                            </div>

                        </div>

                    </div>
                    <div class="row text-center">
                        <div class="col-12 mx-auto d-block pb-10">
                            <h1 class="para-style text-center"> <span class="p-2 m-4">Term of service</span> <span class="   p-2 m-4"> Privacy service</span></h1>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>


</body>
<script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js " integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM " crossorigin="anonymous "></script>

</html>