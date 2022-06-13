<?php
include "config.php";
function timeslots($duration, $cleanup, $start, $end)
{
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
$serviceId=$_POST['service'];
$serviceId=(int)$serviceId;
$dateSlot=$_POST['date_slot'];

// Getting the result of the selected date
$dateSlot = date(('Y-m-d'), strtotime($dateSlot));
$sql3 = "select * from bookings where date = '{$dateSlot}' ";
$res3 = mysqli_query($conn, $sql3);
while ($Slo = mysqli_fetch_assoc($res3)) {
    $sloRes[] = $Slo['timeslot'];
}

$sql1="SELECT * FROM service WHERE s_id=$serviceId";
$res1=mysqli_query($conn,$sql1);
$row1=mysqli_fetch_assoc($res1);
$user=$row1['s_user'];

$query1="SELECT * FROM schedule WHERE sch_user={$user}";           
$res4=mysqli_query($conn,$query1);
if(mysqli_num_rows($res4)>0){
    $row=mysqli_fetch_assoc($res4);
    $duration=$row['sch_duration'];
    $cleanup=$row['sch_gap'];
    $duration=(int)$duration;
    $cleanup =(int)$cleanup;
    $start = $row['sch_stime'];
    $end = $row['sch_etime'];

}
else{
    $duration=45;
    $cleanup=15;
    $start="08:00";
    $end="14:00";
}

$timeS = timeslots($duration, $cleanup, $start, $end);
$output="<div class='modal-dialog'>

<!-- Modal content-->
<div class='modal-content'>
    <div class='modal-header'>
        <button type='button' class='close' data-dismiss='modal'>&times;</button>
        <h4 class='modal-title'>Booking for: <span id='slot'></span></h4>
    </div>
    <div class='modal-body'>
        <div class='row'>
            <div class='col-md-12'>
                <form action='' method='post'>
                    <div class='form-group'>
                        <label for='date_slot'>Slot Date</label>
                        <input readonly type='text' class='form-control' value='$dateSlot' id='date_slot' name='date_slot'>
                    </div>
                    <div class='form-group'>
                        <label for='time_slot'>Time Slot</label>
                        <select class='form-select form-control' name='time_slot' id='time_slot' required>
                        ";
                        foreach ($timeS as $ts) {
                            if (mysqli_num_rows($res3) > 0) 
                            {
                                if (!in_array($ts, $sloRes))
                                {
                                $output.="<option value='$ts'>$ts</option>";
                                }
                            }
                            else{
                                $output.="<option value='$ts'>$ts</option>";
                            }
                        }
                    $output.="</select>
                    </div>
                    <div class='form-group'>
                        <label for='service_title'>Service</label>
                        <input readonly required type='text' class='form-control' value='{$row1['s_title']}' name='service_title' id= 'service_title'>
                    </div>
                    <div class='form-group'>
                        <label for='service_cost'>Cost</label>
                        <input readonly required type='email' class='form-control' value='{$row1['s_cost']}' name='service_cost' id='service_cost'>
                    </div>
                    <div class='form-group pull-right'>
                        <button id='booking' name='submit' type='submit' class='btn btn-primary'>Submit</button>
                    </div>
                </form>
            </div>
        </div>

    </div>

</div>";
echo $output;
?>
