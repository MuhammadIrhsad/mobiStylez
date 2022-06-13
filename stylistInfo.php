<?php include "config.php";
include "header.php";
?>
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
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <!-- w3school css -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Qwigley&family=Raleway:wght@100;300&family=The+Nautigal&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <title>Stylist's details</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            background-color: white;
        }

        .heading {
            height: 40vh;
        }

        #stylist-image {
            height: 110px;
            width: 110px;
        }

        p {
            font-size: 14px;
            font-weight: 500;
        }

        .title-name span {
            margin: 0px 8px;
        }

        .title-btn .btn {
            height: 25px;
            width: 60px;
            font-size: 9px;
        }

        .below-content {
            width: 380px;
        }

        .btn:focus {
            outline: none;
            box-shadow: none;
        }

        .btn:active {
            border-top: 3px solid rgb(98, 94, 94);
        }

        .item {
            background-color: gray;
            height: 280px;
            width: 280px;
        }

        .item:hover {
            animation: ItemAnim .5s ease-in-out;
            animation-iteration-count: 1;
            cursor: pointer;
            box-shadow: 1px 1px 5px 5px #888888;
        }

        /* @keyframes ItemAnim {
            from {
                height: 270px;
                width: 270px;
            }
            to {
                height: 280px;
                width: 280px;
            }
        } */

        .gallery {
            position: absolute;
            transform: translateX(100%);
        }

        #stylist-detail {
            min-height: 110vh;
            width: 80vw;
            position: relative;
            overflow: hidden;
        }

        #stylist-post {
            transform: translateX(0px);
        }

        /* //popUp */

        .pop-container {
            height: 100vh;
            width: 100vw;
            top: 0;
            left: 0;
            background: rgba(0, 0, 0, 0.89);
            display: flex;
            position: fixed;
            align-items: center;
            justify-content: center;
            display: none;
            overflow: auto;
            z-index: 1000;
        }

        .pop {
            height: 90vh;
            width: 60vw;
            top: 0;
            left: 0;
            background-color: white;
            display: flex;
            flex-direction: row;
            position: relative;
            align-items: center;
            justify-content: center;
            align-items: center;
        }

        #image-container {
            width: 50%;
            height: 100%;
        }

        #image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .body-container {
            height: 100%;
            width: 50%;
        }

        .heading {
            display: flex;
            justify-content: space-between;
            flex-direction: row;
            height: 12%;
        }

        .body {
            overflow: auto;
            height: 65%;
        }

        .left {
            display: flex;
            padding: 5px;
            margin: 5px;
            font-size: 14px;
            font-weight: 600;
        }

        .left img,
        p {
            margin: 5px;
        }

        .left a {
            margin-top: 4px;
            background-color: red;
            color: white;
            padding: 2px;
            height: 26px;
            text-decoration: none;
        }

        .text {
            padding-top: 5px;
            font-weight: 300;
            font-size: 15px;
        }

        .pop-btn {
            background: none;
            font-size: 1.8rem;
            text-align: center;
        }
    </style>


</head>

<body>

    <div class="pop-container">

    </div>
    <?php

        $user_id = $_GET['id'];
        $sql2 = "SELECT * FROM user WHERE user_id={$user_id}";

        $res2 = mysqli_query($conn, $sql2) or die("Query Faild");
        $row2 = mysqli_fetch_assoc($res2);

        $sql3 = "SELECT * FROM follow WHERE follower_id={$user_id}";

        $res3 = mysqli_query($conn, $sql3) or die("Query Faild");
        $following = mysqli_num_rows($res3);

        $sql4 = "SELECT * FROM follow WHERE following_id={$user_id}";
        $res4 = mysqli_query($conn, $sql4) or die("Query Faild");
        $follower = mysqli_num_rows($res4);

        $sql5 = "SELECT * FROM post WHERE post_author={$user_id}";
        $res5 = mysqli_query($conn, $sql5) or die("Query Faild");
        $totalPost = mysqli_num_rows($res5);


    ?>

    <div class="container-fluid ">
        <section id="top-section" class=" d-flex flex-column border-bottom border-2  pt-2  justify-content-center align-items-center">

            <div class="row" style="margin-top: 60px !important;">
                <div class="heading col-lg-12 d-flex flex-row pt-4  justify-content-center align-items-center ">


                    <div id="stylist-image" class="mx-4">
                        <img style="width:100%;height:100%;" src="<?php echo './upload/' . $row2['user_image'] ?>" alt="" class=" img-fluid rounded-circle ">
                    </div>
                    <div class="title-bar d-flex flex-column flex-md-row  mt-3">
                        <div class="title-name text-start">

                            <h4 class=" px-2"><?php echo $row2['user_fullname'] ?></h4>

                            <h4 hidden id="current-user" class="px-2"><?php echo $row2['user_id'] ?></h4>
                            <p class="pt-2 text-center"> <strong>follower:<?php echo $follower ?></strong></p>


                        </div>
                        <div class="title-btn">
                            <button class="btn btn-danger  rounded-0">Message
                            </button>
                            <button class="btn btn-danger mx-1 rounded-0">
                                Follow
                            </button>
                            <p class="pt-3 text-center"> <strong>following:<?php echo $following ?></strong></p>
                        </div>

                    </div>
                </div>


            </div>

            <div class="row " style="margin-top: 60px !important;">
                <div class="col-12 pb-4 ps-4 d-flex flex-column justify-content-center align-items-center">
                    <div class="below-content">
                        <p class="text-start mb-1">James Martin</p>
                        <p class="text-start mb-1">stylist</p>
                        <p class="text-start mb-1">Provide the best services in the state of Punjab,Pakistan</p>

                    </div>
                </div>
            </div>
        </section>

    </div>
    <!-- Service Modal -->
    <div class="modal fade" id="serviceModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog model-dialog-center">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New Service</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="serviceForm" method="post">
                        <!-- <div class="form-group" >
                                            <label for="des">Service Description</label>
                                            <input type="text" class="form-control " id="service-author" name="author" value="<?php echo $row['user_id'] ?>" placeholder="Write from here..." required />
                                        </div> -->
                        <div class="form-group">
                            <label for="service-title">Service Title</label>
                            <input type="text" class="form-control " id="service-title" name="service-title" placeholder="Write Service title..." required />
                        </div>
                        <div class="form-group">
                            <label for="service-cost">Service Cost</label>
                            <input type="text" class="form-control " id="service-cost" name="service-cost" placeholder="Write Service cost..." required />
                        </div>
                        <div class="mb-3">
                            <label for="service-image" class="form-label">Service Image</label>
                            <input class="form-control" name="service-image" type="file" id="service-image" required>
                        </div>
                        <div class="modal-footer">
                            <button type="button" id="close" class="btn-sm btn-danger" data-bs-dismiss="modal">Close</button>
                            <!-- <button type="submit" id="send" class="btn-sm btn-primary">Send Post</button> -->
                            <input type="submit" class="btn-sm bg-danger btn-danger" value="save" id="sendService">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- schedule Modal -->
    <div class="modal fade" id="scheduleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog model-dialog-center">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="font-weight: 700; font-size:22px;">Service Schedule</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="scheduleForm" method="post">
                        <!-- <div class="form-group" >
                                            <label for="des">Service Description</label>
                                            <input type="text" class="form-control " id="service-author" name="author" value="<?php echo $row['user_id'] ?>" placeholder="Write from here..." required />
                                        </div> -->
                        <div class="form-group">
                            <div class="row  my-2">
                                <label for="service-title" class="my-2">Service Start Date & Time</label>
                                <div class="col-md-6 py-1">
                                    <input type="date" class="form-control" id="start-date" name="start-date" placeholder="Select start date..." required />

                                </div>
                                <div class="col-md-6 py-1">
                                    <input type="time" class="form-control" id="start-time" name="start-time" placeholder="Select start time..." required />

                                </div>
                            </div>

                        </div>
                        <div class="form-group">
                            <div class="row my-2">
                                <label for="service-title" class="my-2">Service End Date & Time</label>
                                <div class="col-md-6 py-1">
                                    <input type="date" class="form-control" id="end-date" name="end-date" placeholder="Select end date..." required />

                                </div>
                                <div class="col-md-6 py-1">
                                    <input type="time" class="form-control" id="end-time" name="end-time" placeholder="Select end time..." required />

                                </div>
                            </div>

                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-12">
                                    <label for="service-duration" class="my-2">Service duration</label>
                                    <!-- <label for="validationDefault04" class="form-label">State</label> -->
                                    <select class="form-select " name="service-duration" id="service-duration" required>
                                        <option value="60:00">60:00 min</option>
                                        <option value="45:00">45:00 min</option>
                                        <option value="30:00">30:00 min</option>
                                        <option selected value="15:00">15:00 min</option>

                                    </select>
                                </div>

                            </div>

                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-12  ">
                                    <label for="service-gap" class="my-2">Service gap</label>
                                    <select class="form-select" name="service-gap" id="service-gap" required>
                                        <option value="60:00">60:00 min</option>
                                        <option value="45:00">45:00 min</option>
                                        <option value="30:00">30:00 min</option>
                                        <option selected value="15:00">15:00 min</option>

                                    </select>
                                </div>

                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-12  ">
                                    <label for="service-holiday" class="my-2">Holiday</label>
                                    <!-- <label for="validationDefault04" class="form-label">State</label> -->
                                    <select class="form-select" name="service-holiday" id="service-holiday" required>
                                        <option selected value="none">None</option>
                                        <option value="sunday">Sunday</option>
                                        <option value="monday">Monday</option>
                                        <option value="tuesday">Tuesday</option>
                                        <option value="wednesday">Wednesday</option>
                                        <option value="thursday">Thursday</option>
                                        <option value="friday">Friday</option>
                                        <option value="saturday">Saturday</option>
                                    </select>
                                </div>

                            </div>
                        </div>

                </div>

                <div class="modal-footer">
                    <button type="button" id="close" class="btn-sm btn-danger" data-bs-dismiss="modal">Close</button>
                    <!-- <button type="submit" id="send" class="btn-sm btn-primary">Send Post</button> -->
                    <input type="submit" class="btn-sm bg-danger btn-danger" value="save" id="sendService">
                </div>
                </form>

            </div>
        </div>
    </div>
    <div class="container  ">
        <section id="bottom-section">
            <row class="btn-bar mb-3 d-flex justify-content-center">
                <button style=" border-top: 3px solid gray;" id="btn-post" class="btn btn-block "><i class=" px-2 bi bi-grid-3x3-gap-fill"></i>Post</button><button id="btn-service" class="btn "> <i class=" px-2 bi bi-card-checklist"></i>Services

                </button>

            </row>
            <div id="stylist-detail">

                <!-- Post section -->

                <div id="stylist-post" class=" gallery col-lg-12 d-flex flex-wrap justify-content-center">
                    <?php
                    include "config.php";
                    $sql = "SELECT * FROM post WHERE post_author={$_GET['id']}";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {

                    ?>
                            <div class="item m-md-4 img-fluid" style="height: 300px; width:300px; overflow:hidden">
                                <img data-id="<?php echo $row['post_id']; ?>" src="<?php echo $hostName . 'upload/' . $row['post_image']; ?>" class="img-thumbnail post" alt="">
                            </div>
                    <?php
                        }
                    }
                    ?>


                </div>

                <!-- services -->

                <div id="stylist-service" class=" gallery col-lg-12 d-flex flex-wrap justify-content-center">


                    <!--
                    <div class="item m-md-4 ">
                        <img id="service1" src="./barberImages/Rectangle -7.png" class="img-fluid galleryImage" alt="">
                    </div>
                    
                    <div class="item m-4">
                        <img id="service2" src="./barberImages/Rectangle -8.png" class="img-fluid galleryImage" alt="">
                    </div>
                    <div class="item m-4">
                        <img id="service3" src="./barberImages/Rectangle -9.png" class="img-fluid galleryImage" alt="">
                    </div>
                    <div class="item m-4">
                        <img id="service4" src="./barberImages/Rectangle -10.png" class="img-fluid galleryImage" alt="">
                    </div>
                    <div class="item m-4">
                        <img id="service5" src="./barberImages/Rectangle -11.png" class="img-fluid galleryImage" alt="">
                    </div>
                    <div class="item m-4">
                        <img id="service6" src="./barberImages/Rectangle -12.png" class="img-fluid galleryImage" alt="">
                    </div>
                </div> -->

                </div>
                <script src="./js/bootstrap.bundle.min.js "></script>
                <script src="./js/jquery-3.6.0.js"></script>

        </section>
    </div>
    <script>
        $("document").ready(function() {

            var user = $("#current-user").html();

            //saving schedule
            $("#scheduleForm").on("submit", function(e) {
                e.preventDefault;
                var sDate = $("#start-date").val();
                var sTime = $("#start-time").val();
                var eDate = $("#end-date").val();
                var eTime = $("#end-time").val();
                var sGap = $("#service-gap").val();
                var sDuration = $("#service-duration").val();
                var sHoliday = $("#service-holiday").val();
                $.ajax({
                    url: "save-schedule.php",
                    type: "POST",
                    data: {
                        startDate: sDate,
                        startTime: sTime,
                        endDate: eDate,
                        endTime: eTime,
                        sDuration: sDuration,
                        sGap: sGap,
                        sHoliday: sHoliday,
                    },
                    success: function(data) {
                        if (data == 1) {
                            alert("Schedule Saved" + data);
                        } else {
                            alert("Schedule Not Saved" + data);
                        }
                    },
                })
            })

            //load Service
            function loadService(data) {

                $.ajax({
                    url: "load-service.php",
                    type: "POST",
                    data: {
                        cur_user: user
                    },
                    success: function(data) {
                        if (data != "") {
                            $("#stylist-service").html(data);
                        } else {
                            alert("No service available");
                        }
                    }

                })
            }
            loadService();

            //Add Service
            $("#serviceForm").on("submit", function(e) {
                e.preventDefault();
                var form_Data = new FormData(this);
                $.ajax({
                    url: "add-service.php",
                    type: "POST",
                    data: form_Data,
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        // $("#postModal").modal('hide')
                        if (data == 1) {
                            alert("Service is saved");
                            $("#close").click();
                            $("#serviceForm").trigger("reset");
                            loadService();
                        } else {
                            alert(data);
                        }
                    }
                })
            })
            //PopUp Window
            var popScreen = $(".pop-container");
            $(".post").on("click", function(e) {
                var post_id = $(this).data("id");
                $.ajax({
                    url: "user-post.php",
                    type: "POST",
                    data: {
                        postId: post_id,
                    },
                    success: function(data) {
                        if (data != "") {

                            // let popUp = $(".pop-container");
                            $(".pop-container").css("display", "flex");
                            $(".pop-container").html(data);
                        } else {
                            alert("No Data");
                        }
                    }


                })

            })
            $("body").on("click", "#close-p", function() {
                $(".pop-container").html("");
                $(".pop-container").css("display", "none");

            })
        })

        // let ImagePop = document.getElementById("popImage");

        // let items = document.querySelectorAll(".galleryImage");
        // console.log(items);
        // let imageSource = "./barberImages/Rectangle -";
        // // let actualIndex = "12.png"
        // let index = 1;
        // let tem = 0;
        // items.forEach(function(item) {
        //     item.addEventListener('click', function(e) {

        //         let itemId = e.currentTarget.id;
        //         console.log(itemId);

        //         index = itemId.charAt(itemId.length - 1)
        //         if (itemId.charAt(0) === "s") {
        //             tem = Number(index) + 6;
        //             index = "" + tem;
        //             console.log("Its from service");
        //         }
        //         console.log(index);

        //         ImagePop.src = imageSource.concat(index.concat(".png"));
        //         popUp.style.display = "flex";
        //         popUp.style.position = "sticky";

        //     })
        // });


        // closeP.addEventListener('click', () => {
        //     popUp.style.display = "none";
        // });

        let btnService = document.getElementById("btn-service");
        let btnPost = document.getElementById("btn-post");
        let post = document.getElementById("stylist-post");
        let service = document.getElementById("stylist-service");

        btnPost.addEventListener('click', () => {
            post.style.transform = "translateX(0px)";
            service.style.transform = "translateX(100%)";
            btnPost.style.borderTop = "3px solid gray";
            btnService.style.borderTop = "none";


        });
        btnService.addEventListener('click', () => {
            post.style.transform = "translateX(100%)";
            service.style.transform = "translateX(0px)";
            btnService.style.borderTop = "3px solid gray";
            btnPost.style.borderTop = "none";
        });
    </script>
</body>

</html>