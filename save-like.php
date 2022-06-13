<?php
include "config.php";
session_start();
$postId = $_POST["like_id"];
$query1="SELECT * FROM post_like WHERE like_post=$postId AND like_user={$_SESSION['id']}";
$result=mysqli_query($conn,$query1);
if(mysqli_num_rows($result)>0){
    $query="DELETE FROM post_like WHERE like_post=$postId AND like_user={$_SESSION['id']}";
    if(mysqli_query($conn,$query)){
        echo 2;
    }
    else{
        echo 0;
    }
}
else{
    $query = "INSERT INTO post_like(like_post,like_user) VALUES({$postId},{$_SESSION['id']})";
    if(mysqli_query($conn, $query)) {
        echo 1;
    } 
    else{
        echo 0;
    }
}

?>
