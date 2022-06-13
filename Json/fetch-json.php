<?php

$conn = mysqli_connect("localhost","root","","test") or die("Connection Faild..");
$start=isset($_GET['start']) ? intval($_GET['start']) : 0;
$sql = "SELECT * FROM user where user_id > $start";

$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
$output= mysqli_fetch_all($result,MYSQLI_ASSOC);
echo json_encode($output);
header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');
}
else{
    echo "NO enough data";
}


?>