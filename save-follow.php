<?php
include "config.php";
session_start();
$followingId = $_POST["follow_id"];
$query1="SELECT * FROM follow WHERE following_id=$followingId AND follower_id={$_SESSION['id']}";
$result=mysqli_query($conn,$query1);
if(mysqli_num_rows($result)>0){
    $query="DELETE FROM follow WHERE following_id=$followingId AND follower_id={$_SESSION['id']}";
    if(mysqli_query($conn,$query)){
        echo 2;
    }
    else{
        echo 0;
    }
}
else{
$query = "INSERT INTO follow(follower_id,following_id) VALUES({$_SESSION['id']},{$followingId});";

$query.="INSERT INTO notification(n_user,n_status,n_description) VALUES($followingId,0,'{$_SESSION['user']} follow you');";
if(mysqli_multi_query($conn, $query)) {
    echo 1;
} 
else{
    echo 0;
}
    }

?>
