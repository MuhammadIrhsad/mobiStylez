<?php
    include "config.php";
    session_start();
    if(isset($_SESSION['id'])){

        $comment_content=$_POST['postComment'];
        $comment_post=$_POST['commentpost'];
        // $comment_content="Nice";

        $sql="INSERT INTO comment(comment_user,comment_username,comment_content,comment_post) VALUES ({$_SESSION['id']},'{$_SESSION['user']}','{$comment_content}',{$comment_post})";

        if(mysqli_query($conn,$sql)){
            echo 1;
        }
        else{
            0;
        }
    }
?>