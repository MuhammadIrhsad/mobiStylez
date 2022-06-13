<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Date;
use PhpParser\Node\Expr\Cast\Int_;
use Vonage\Numbers\Number;

$conn1 = mysqli_connect("localhost", "root", "", "calandar");

if (isset($_POST['submit'])) {
    if (isset($_GET['date'])) {
        $date = $_GET['date'];
    }
    $name = $_POST['name'];
    $email = $_POST['email'];
    $timeslot = $_POST['timeslot'];
  
    $sql1 = "select * from bookings where date = '{$date}' AND timeslot= '{$timeslot}'";
    $res = mysqli_query($conn1, $sql1);
    if (mysqli_num_rows($res) > 0) {
        $msg = "<div  class='text-center alert alert-danger'>Already Booked</div>";
    } else {
        $sql2 =  "INSERT INTO bookings (name, timeslot, date, email) VALUES ('{$name}', '{$timeslot}', '{$date}', '{$email}')";

        $res2 = mysqli_query($conn1, $sql2) or die("Connection Faild");
        $msg = "<div class='alert alert-success text-center ' style='width:200px;'>Booking Successfull</div>";
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
function timeslots($duration, $cleanup, $start, $end)
{
    include "config.php";
    $start = new DateTime($start);
    $end = new DateTime($end);
    $interval = new DateInterval("PT" . $duration . "M");
    $cleanupInterval = new DateInterval("PT" . $cleanup . "M");
    $slots = array();
    for ($intStart = $start; $intStart < $end; $intStart->add($interval)->add($cleanupInterval)) {
        $endPeriod = clone $intStart;
        $endPeriod->add($interval);
        if ($endPeriod > $end) {
            break;
        }
        $slots[] = $intStart->format("H:iA") . " - " . $endPeriod->format("H:iA");
    }
    return $slots;
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/main.css">
</head>

<body>

    <div class="container">

        <h1 class="text-center">Book for Date: <?php echo date('m/d/Y', strtotime($_GET['date'])); ?></h1>
        <hr>
        <div class="row">

            <?php
            include "config.php";
            $date = date(('Y-m-d'), strtotime($_GET['date']));
            $sql3 = "select * from bookings where date = '{$date}' ";
            $res3 = mysqli_query($conn1, $sql3);

            while ($Slo = mysqli_fetch_assoc($res3)) {
                $sloRes[] = $Slo['timeslot'];
            }
            $query1="SELECT * FROM schedule WHERE sch_user=1";           
            $res4=mysqli_query($conn,$query1);
            $row=mysqli_fetch_assoc($res4);
            $duration=$row['sch_duration'];
            $cleanup=$row['sch_gap'];
            $duration=(int)$duration;
            $cleanup =(int)$cleanup;
            $start = $row['sch_stime'];
            $end = $row['sch_etime'];
            $timeS = timeslots($duration, $cleanup, $start, $end);
            foreach ($timeS as $ts) {
                if (mysqli_num_rows($res3) > 0) 
                {
                    if (!in_array($ts, $sloRes)) 
                    {
            ?>
                        <div class="col-md-2 ">
                            <div class="form-group">
                                <button class="btn btn-warning book" data-timeslot='<?php echo $ts ?>'><?php echo $ts ?></button>
                            </div>
                        </div>
            <?php
                    }
                }
                else{
                    ?>
                     <div class="col-md-2 ">
                            <div class="form-group">
                                <button class="btn btn-warning book" data-timeslot='<?php echo $ts ?>'><?php echo $ts ?></button>
                            </div>
                        </div>
                    <?php
                }
            }

            ?>
        </div>
        <?php echo (isset($msg)) ? $msg : ""; ?>
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Booking for: <span id="slot"></span></h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form action="" method="post">
                                    <div class="form-group">
                                        <label for="">Slot Date</label>
                                        <input readonly type="text" class="form-control" value="<?php echo $_GET['date'] ?>" id="date" name="date">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Time Slot</label>
                                        <input readonly type="text" class="form-control" id="timeslot" name="timeslot">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Name</label>
                                        <input required type="text" class="form-control" name="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input required type="email" class="form-control" name="email">
                                    </div>
                                    <div class="form-group pull-right">
                                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script>
        $(".book").click(function() {
            var timeslot = $(this).attr('data-timeslot');
            $("#slot").html(timeslot);
            $("#timeslot").val(timeslot);
            $("#myModal").modal("show");
        });
        setInterval("$('.alert').fadeOut();", 3000);
    </script>
</body>

</html>