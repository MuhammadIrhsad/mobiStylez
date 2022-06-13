<?php
    if ($_FILES['service-image']!="") {
        $errors = array();
        $fileName = $_FILES['service-image']['name'];
        $fileSize = $_FILES['service-image']['size'];
        $fileTempName = $_FILES['service-image']['tmp_name'];
        $fileType = $_FILES['service-image']['type'];
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
    $sTitle=$_POST['service-title'];
    $sCost = $_POST['service-cost'];
    session_start();
    $sUser=$_SESSION['id'];
    
   

    $query2="INSERT INTO service(s_user,s_title,s_cost,s_image) VALUES({$sUser},'{$sTitle}','{$sCost}','{$fileName}');";
    
    if(mysqli_query($conn,$query2))
    {
        echo 1;
    }
    else
    {

       echo 0;
    }
?>