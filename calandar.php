<?php
// use Dotenv\Util\Str;
function build_calendar($month, $year)
{
    include "config.php";
    if (isset($_GET['month'])) {
        $month = $_GET['month'];
        $year = $_GET['year'];
    }
    // $mysqli = new mysqli('localhost', 'root', '', 'calandar');

    // $stmt = $mysqli->prepare("select * from bookings where MONTH(date) = ? AND YEAR(date)=?");
    // $stmt->bind_param('ss', $month, $year);
    // $bookings = array();
    // if ($stmt->execute()) {
    //     $result = $stmt->get_result();
    //     if ($result->num_rows > 0) {
    //         while ($row = $result->fetch_assoc()) {
    //             $bookings[] = $row['date'];
    //         }
    //         $stmt->close();
    //     }
    // }

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
    $calendar = "<table class='table table-bordered'>";
    $calendar .= "<center><h2>$monthName $year</h2>";
    $calendar .= "<a class='btn btn-sm btn-primary m-2' href='?month=" . date("m", mktime(0, 0, 0, ($month - 1), 1, $year)) . "&year=" . date("Y", mktime(0, 0, 0, ($month - 1), 1, $year)) . "'>Previous Month</a>";
    $calendar .= "<a class='btn btn-sm btn-primary m-2' href='?month=" . date("m") . "&year=" . date("Y") . "'>Current Month</a>";
    $calendar .= "<a class='btn btn-sm btn-primary m-2' href='?month=" . date("m", mktime(0, 0, 0, ($month + 1), 1, $year)) . "&year=" . date("Y", mktime(0, 0, 0, ($month + 1), 1, $year)) . "'>Next Month</a></center>";

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
    $query="SELECT * FROM schedule WHERE sch_user=1";
    $res=mysqli_query($conn,$query);
    $row=mysqli_fetch_assoc($res);
    $startDate=$row['sch_sdate'];
    $startDate=date("Y-m-d",strtotime($startDate));
    $endDate=$row['sch_edate'];
    $endDate=date("Y-m-d",strtotime($endDate));
    $holiday=$row['sch_holiday'];


    
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
            <a class='btn-sm text-decoration-none btn-danger '>N/A</a>";
                } else {
                    $calendar .= "<td><h4 class='$today'> $currentDay</h4>
                        <a href='timeslot.php?date=" . $date . "' class='btn-sm btn-warning text-decoration-none'>Book</a>";
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
            <a class='btn-sm text-decoration-none btn-danger '>N/A</a>";
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <style>
        table {
            table-layout: fixed;
        }

        .today {
            background-color: #8c8e00 ;
        }

        td {
            width: 33%;
        }
    </style>
</head>

<body>
    <div class="container">
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
    </div>
</body>


</html>