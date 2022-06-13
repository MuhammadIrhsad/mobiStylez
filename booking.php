<?php
// use Dotenv\Util\Str;
include "config.php";
if (isset($_POST['submit'])) {
    
    $timeslot = $_POST['time_slot'];
    $dateSlot=$_POST['date_slot'];
    $title=$_POST['service_title'];
    $cost=$_POST['service_cost'];  
    $sql1 = "select * from bookings where date = '{$dateSlot}' AND timeslot= '{$timeslot}'";
    $res = mysqli_query($conn, $sql1);
    if (mysqli_num_rows($res) > 0) {
        $msg = "<div class='alert alert-danger'>Already Booked</div>";
    } else {
        $sql2 =  "INSERT INTO bookings (timeslot, date,service_title,service_cost) VALUES ('{$timeslot}', '{$dateSlot}', '{$title}','{$cost}')";

        $res2 = mysqli_query($conn, $sql2) or die("Connection Faild");
        $msg = "<div class='alert alert-success '>Booking Successfull</div>";
    }

    // $stmt->bind_param('s', $date);

    // if($stmt->execute()){
    //     $result = $stmt->get_result();
    //     if($result->num_rows>0){

    //     }else{
    //         $stmt = $mysqli->prepare(
    //         $stmt->bind_param('ssss', );
    //         $stmt->execute();

    //         $stmt->close();
    //         $mysqli->close();
    //     }
    // }
}
function build_calendar($month, $year)
{
    include "config.php";
    if (isset($_GET['month'])) {
        $month = $_GET['month'];
        $year = $_GET['year'];
    }
    $daysOfWeek = array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat');
    $firstDayOfMonth = mktime(0, 0, 0, $month, 1, $year);
    // How many days does this month contain?
    $numberDays = date('t', $firstDayOfMonth);
    // Retrieve some information about the first day of the
    // month in question.
    $dateComponents = getdate($firstDayOfMonth);
    // What is the name of the month in question?
    $monthName = $dateComponents['month'];
    // What is the index value (0-6) of the first day of the
    // month in question.
    $dayOfWeek = $dateComponents['wday'];
    // Create the table tag opener and day headers 
    $datetoday = date('Y-m-d');
    $calendar = "<table class='table table-bordered table-responsive'>";
    $calendar .= "<center><h2>$monthName $year</h2>";
    $calendar .= "<a class='btn btn-sm btn-primary ' style='margin:10px;' href='?id={$_GET['id']}&month=" . date("m", mktime(0, 0, 0, ($month - 1), 1, $year)) . "&year=" . date("Y", mktime(0, 0, 0, ($month - 1), 1, $year)) . "'>Previous Month</a>";
    $calendar .= "<a class='btn btn-sm btn-primary ' style='margin:10px;' href='?id={$_GET['id']}&month=" . date("m") . "&year=" . date("Y") . "'>Current Month</a>";
    $calendar .= "<a class='btn btn-sm btn-primary ' style='margin:10px;' href='?id={$_GET['id']}&month=" . date("m", mktime(0, 0, 0, ($month + 1), 1, $year)) . "&year=" . date("Y", mktime(0, 0, 0, ($month + 1), 1, $year)) . "'>Next Month</a></center>";

    $calendar .= "<tr>";

    // Create the calendar headers 
    foreach ($daysOfWeek as $day) {
        $calendar .= "<th class='header'>$day</th>";
    }
    // Create the rest of the calendar
    // Initiate the day counter, starting with the 1st. 
    $currentDay = 1;
    $calendar .= "</tr><tr>";
    // The variable $dayOfWeek is used to 
    // ensure that the calendar 
    // display consists of exactly 7 columns.   
    if ($dayOfWeek > 0) {
        for ($k = 0; $k < $dayOfWeek; $k++) {
            $calendar .= "<td class='empty'></td>";
        }
    }
    $month = str_pad($month, 2, "0", STR_PAD_LEFT);
    $query = "SELECT * FROM schedule WHERE sch_user=1";
    $res = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($res);
    $startDate = $row['sch_sdate'];
    $startDate = date("Y-m-d", strtotime($startDate));
    $endDate = $row['sch_edate'];
    $endDate = date("Y-m-d", strtotime($endDate));
    $holiday = $row['sch_holiday'];



    // $date = "$year-$month-$currentDayRel";
    //     $dayname = strtolower(date('l', strtotime($date)));
    // $startDate = date('Y-m-d', mktime(0, 0, 0, 04, 15, 2022));
    // $endDate = date('Y-m-d', mktime(0, 0, 0, 06, 15, 2022));


    while ($currentDay <= $numberDays) {
        //Seventh column (Saturday) reached. Start a new row. 
        if ($dayOfWeek == 7) {
            $dayOfWeek = 0;
            $calendar .= "</tr><tr>";
        }
        $currentDayRel = str_pad($currentDay, 2, "0", STR_PAD_LEFT);
        $date = "$year-$month-$currentDayRel";
        $dayname = strtolower(date('l', strtotime($date)));
        $eventNum = 0;

        $today = $date == date('Y-m-d') ? "today" : "";
        if ($date < date("Y-m-d")) {

            $calendar .= "<td ><h4 > $currentDay</h4>
            <a class='btn-sm text-decoration-none btn-danger '>N/A</a>";
        }
        // else if(in_array($date,$bookings)){
        //     $calendar .= "<td ><h4 > $currentDay</h4>
        //     <a class='btn-sm text-decoration-none btn-secondary '>Already Book</a>";
        // }
        else {
            if ($date >= $startDate && $date <= $endDate) {
                // if (isweekend("".$date) == true) 
                // {
                $date1 = date_create($date);
                $day = date_format($date1, "l");
                if ($holiday === strtolower($day)) {
                    $calendar .= "<td ><h4 > $currentDay</h4>
                    <a  class='btn-sm disabled text-decoration-none btn-danger '>N/A</a>";
                } else {
                    $calendar .= "<td><h4 class='$today'> $currentDay</h4>
                        <a style='cursor:pointer' class='btn-sm btn-warning disabled text-decoration-none book' data-dateslot='$date'>Book</a>";
                    // echo "This isn't weekend";
                }
                // } 
                // else 
                // {
                //     $calendar .= "<td ><h4 > $currentDay</h4>
                //     <a class='btn-sm text-decoration-none btn-danger '>N/A</a>";
                // }
            } else {
                $calendar .= "<td ><h4 > $currentDay</h4>
                <a class='btn-sm disabled text-decoration-none btn-danger '>N/A</a>";
            }
        }
        $calendar .= "</td>";
        //Increment counters 
        $currentDay++;
        $dayOfWeek++;
    }
    //Complete the row of the last week in month, if necessary 
    if ($dayOfWeek != 7) {
        $remainingDays = 7 - $dayOfWeek;
        for ($l = 0; $l < $remainingDays; $l++) {
            $calendar .= "<td class='empty'></td>";
        }
    }

    $calendar .= "</tr>";
    $calendar .= "</table>";
    return $calendar;
}
?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Booking calandar</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/main.css">
    <!-- <link rel="stylesheet" href="./css/bootstrap.min.css"> -->
    <style>
        table {
            table-layout: fixed;
        }

        .today {
            background-color: blueviolet;
            color: white;
        }

        td {
            width: 33%;
        }
    </style>
</head>

<body>
    <div class="container">
        <div id="myModal" class="modal fade" role="dialog">
            
        </div>
        <div class="row">
            <div class="col-md-12">
                <?php
                $dateComponents = getdate();
                $month = $dateComponents['mon'];
                $year = $dateComponents['year'];
                echo build_calendar($month, $year);
                ?>

            </div>
            

        </div>
        <?php echo (isset($msg)) ? $msg : ""; ?>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script>
        <?php
        $service=$_GET['id'];
        echo "var current_service= '$service';";
        ?>
        
        $(".book").click(function() {
            
           
            var dateSlot = $(this).attr('data-dateslot');
            
            $.ajax({
                url: "load-timeslot.php",
                type: "POST",
                data: {
                    date_slot:dateSlot,
                    service:current_service,
                    
                },
                success:function(data){
                    $("#myModal").html(data);
                    $("#myModal").modal("show");
                }
            })
           
        });
        setInterval("$('.alert').fadeOut();", 2000);
    </script>
</body>


</html>