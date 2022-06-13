<?php
    if ($_FILES['postImage']!="") {
        $errors = array();
        $fileName = $_FILES['postImage']['name'];
        $fileSize = $_FILES['postImage']['size'];
        $fileTempName = $_FILES['postImage']['tmp_name'];
        $fileType = $_FILES['postImage']['type'];
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
    $post_author=$_POST['author'];
    $post_des = $_POST['description'];
    
   

    $query2="INSERT INTO post(post_author,post_description,post_image) VALUES({$post_author},'{$post_des}','{$fileName}');";
    
    if(mysqli_query($conn,$query2))
    {
        echo 1;
    }
    else
    {

       echo 0;
    }
?>