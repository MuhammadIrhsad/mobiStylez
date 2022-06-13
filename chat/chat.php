<?php

use Illuminate\Support\Arr;

$conn = mysqli_connect("localhost", "root", "", "chat");
if ($conn) {
    $result = array();
    $message = isset($_POST['message']) ? $_POST['message'] : null;
    $from = isset($_POST['from']) ? $_POST['from'] : null;
    if ($message!=null && $from!=null) {
        $sql="INSERT INTO `chat` (`message`, `from`) VALUES ('".$message."', '".$from."');";
        $res = mysqli_query($conn, $sql);
        // $result['send_status'] = $res;
    }

    $start=isset($_GET['start']) ? intval($_GET['start']) : 0;

    $sql2="SELECT * FROM chat WHERE id > {$start} ";
    $items=mysqli_query($conn,$sql2);
    while($row=mysqli_fetch_assoc($items)){
        $result['items'][]=$row;
    }
    mysqli_close($conn);
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');

    echo json_encode($result);
} else {
    die("Connection Failed");
}
