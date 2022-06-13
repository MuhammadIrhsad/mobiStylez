
<?php
    include "config.php";
    $user_email = mysqli_real_escape_string($conn, $_POST['email']);
    $pasword = mysqli_real_escape_string($conn, md5($_POST['password']));

    $sql = "SELECT * FROM user WHERE user_email='{$user_email}' AND user_password='{$pasword}'";

    $res = mysqli_query($conn, $sql);
    
   

    if (mysqli_num_rows($res)> 0) {
        session_start();
        $row = mysqli_fetch_assoc($res);
        $_SESSION['user'] = $row['user_fullname'];
        $_SESSION['id'] = $row['user_id'];
        $_SESSION['role'] = $row['user_role'];
        if ($row['user_role'] == 1) {
            header("Location: {$hostName}stylistInfo.php?id={$row['user_id']}");
        } else {
            header("Location: {$hostName}index.php?id={$row['user_id']}");
        }
        //echo "<a href='home.html' class='btn' ><strong> Finish</strong> </a>";

    }else
        echo "Your email or Password  is wrong." . "<a href= '{$hostName}SignIn.php'  > Try Again </a>";

    mysqli_close($conn);
?>
