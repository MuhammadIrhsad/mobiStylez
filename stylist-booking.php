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



    <title>Book Your Stylist</title>
    <style>
        body {
            background-color: white;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: inherit;
            border-spacing: 18px 8px;
            width: 100%;
        }
        
        th {
            text-align: center;
            background-color: none;
        }
        
        #customers td {
            border: 1px solid #ddd;
            height: 30px;
        }
        
        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        
        #customers tr:hover {
            background-color: #ddd;
        }
        
        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: center;
        }
        
        td {
            text-align: left;
            background-color: rgb(92, 90, 90);
        }
        
        .ralway {
            font-family: 'Raleway', serif;
        }
        
        .booking-container {
            width: 800px;
            min-height: 100vh;
            position: relative;
            background-color: white;
        }
        
        .heading {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 8px 16px;
            height: 80px;
            width: 100%;
        }
        
        #btn-close {
            font-size: 2.5rem;
            background: none;
            border: none;
            outline: none;
            margin-bottom: 4px;
        }
        
        .next-prev {
            margin: 2px 20px;
            height: 100px;
            border-bottom: 2px solid rgb(177, 149, 149);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .btn {
            height: 50px !important;
        }
        
        .chose-time {
            display: flex;
            height: 50px;
            width: 100%;
            align-items: center;
            justify-content: center;
        }
        
        .select-time {
            border-radius: 12px;
            background-color: gray;
            color: white;
            margin: 6px;
            height: 40px;
            width: 13%
        }
        
        input::placeholder {
            color: rgb(93, 84, 84) !important;
        }
    </style>
</head>

<body>


    <div class="booking-container border rounded m-4">
        <div class="heading">

            <h1 class="ralway">Book Now</h1>

            <button id="btn-close">&times;</button>

        </div>
        <hr>
        <div class="next-prev">
            <div class="btn btn-danger"><i style="font-size: 1.3rem;" class="bi bi-arrow-left-short"></i>Previous Week</div>
            <div class="btn btn-danger">Next Week<i style="font-size: 1.3rem;" class="bi bi-arrow-right-short"></i></div>
        </div>
        <div class="booking-table mt-4 pt-4">
            <table id="customers">
                <tr>
                    <th class="text-center"></th>
                    <th class="text-center ralway">Monday</th>
                    <th class="text-center ralway">Tueday</th>
                    <th class="text-center ralway">Wedday</th>
                    <th class="text-center ralway">Thrday</th>
                    <th class="text-center ralway">Friday</th>
                </tr>
                <tr>
                    <td style="background-color:white;text-align:center ; border:none ;outline:none;">08:50</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td style="background-color:white;text-align:center ; border:none ;outline:none;">08:50</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td style="background-color:white;text-align:center ; border:none ;outline:none;">08:50</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td style="background-color:white;text-align:center ; border:none ;outline:none;">08:50</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td style="background-color:white;text-align:center ; border:none ;outline:none;">08:50</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td style="background-color:white;text-align:center ; border:none ;outline:none;">08:50</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td style="background-color:white;text-align:center ; border:none ;outline:none;">08:50</td>
                    <td>Hello World</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

            </table>
        </div>
        <div class=" my-3 chose-time position-relative w-100">
            <button class="select-time ">18:00<i style="transform: translate(165%,-142%); border:non " class="text-danger fas fa-plus-circle"></i></button>
            <button class="select-time ">18:00<i style="transform: translate(165%,-142%); border:non" class="text-danger fas fa-minus-circle"></i></button>
        </div>
        <form class="row my-4 g-3">
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
                    <input type="text" class="form-control p-2 m-3 shadow" placeholder="City" id="inputEmail4">
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control p-2 m-3 shadow" placeholder="Address" id="inputPassword4">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <!-- <input type="text" class="form-control p-4 m-3 shadow" placeholder="City" id="inputEmail4"> -->
                    <div class="input-group shadow m-3">
                        <div class="input-group-text p-4 "><i style="font-size: 2rem;" class="text-primary fas fa-map-marker-alt"></i></div>
                        <input type="text" class="form-control p-4" id="specificSizeInputGroupUsername" placeholder="Drop Your Location">
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- <input type="text" class="form-control p-2 m-3 shadow" placeholder="Address" id="inputPassword4"> -->
                    <div class="p-2 m-3">
                        <a href="./stylistPayment.html" class="btn btn-success">Send Request</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
<script>
    var table = document.getElementById("customers"),
        rIndex, cIndex;

    // table rows
    for (var i = 1; i < table.rows.length; i++) {
        // row cells
        for (var j = 1; j < table.rows[i].cells.length; j++) {
            table.rows[i].cells[j].onclick = function() {
                this.style.backgroundColor = 'red';
                this.innerHTML = "Booked";
                this.style.color = 'white';

            };
        }
    }
</script>

</html>