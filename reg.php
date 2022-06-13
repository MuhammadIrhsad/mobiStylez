<?php
    if (isset($_FILES['profile-image'])) {
        $errors = array();
        $fileName = $_FILES['profile-image']['name'];
        $fileSize = $_FILES['profile-image']['size'];
        $fileTempName = $_FILES['profile-image']['tmp_name'];
        $fileType = $_FILES['profile-image']['type'];
        $extention=explode('.', $fileName);
        $newStr=end($extention);
        $fileExtension = strtolower($newStr);
        $valiExtensions = array("png", "jpg", "jpeg");
        if (in_array($fileExtension, $valiExtensions) === false) {
            $errors[] = "This extension file is not allowed. Plz choose png and jpg file";
        }
        if ($fileSize > 2097152) {
            $errors[] = "File size must be lower than 2MB";
        }
        if (empty($errors) === true) {
            move_uploaded_file($fileTempName, 'upload/' . $fileName);
        } else {
            print_r($errors);
            die();
        }
    }
    include "config.php";
    $user_role = mysqli_real_escape_string($conn, $_POST['user-role']);
    $fullName = mysqli_real_escape_string($conn, $_POST['full-name']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, md5($_POST['password']));
    $follower = 0;
    $following = 0;

    $query2="SELECT *FROM user WHERE user_email='{$email}'";
    $res2=mysqli_query($conn,$query2);
    if(mysqli_num_rows($res2)>0)
    {
        echo" This email is already exist. Use another one..";
        echo"<a href='{$hostName}/Register.php'> Try again</a>";
    }
    else
    {

        $query = "INSERT INTO user(user_role,user_fullname,user_image,user_address,user_phone,user_email,user_password,user_followers,user_following) VALUES 
        ({$user_role},'{$fullName}','{$fileName}','{$address}','{$phone}','{$email}','{$password}',{$follower},{$following});";
        
        if (mysqli_query($conn, $query)) {
            header("Location: {$hostName}/SignIn.php");
        }
        else {
        echo "<div class='alert alert-danger'>Query Faild....!</div>";
        }
    }
?>