<?php
include "config.php";
    echo "hello";
    $sql2 = "SELECT * FROM notification WHERE n_user={$_SESSION['id']} ORDER BY n_user DESC";
    $res2 = mysqli_query($conn, $sql2);
    $result="load notification";
    if (mysqli_num_rows($res2) > 0) {
        while ($row2 = mysqli_fetch_assoc($res2)) {
            $result.="<li><a class='dropdown-item' >{$row2['n_description']}</a></li>";
        }
    } else {
        $result.= "<li><a class='dropdown-item' >No notification</a></li>";
    }
    echo $result;


?>