<?php
session_start();
echo 'picture page<br>';

if (isset($_POST['submit']) && isset($_FILES['picture'])) {
    $name = $_FILES['picture']['name'];
    $temp = $_FILES['picture']['tmp_name']; 

    //create a unique file name\
    $newname = time() . '_' . $name;
    $uploadDir = 'profilepicture/';
    $uploadpath = $uploadDir . $newname;

    //move the file to the upload directory
    if (move_uploaded_file($temp, $uploadpath)) {
        echo 'File uploaded successfully<br>';

        // Store the image path in the sesssion
        $_SESSION['uploaded_image'] = $uploadPath;

        //Redirect to the dashboard after upload
        header('Location: dashboard.php');
        exit();
    } else {
        echo 'File upload failed. Please check file permissions and directory existence<br>';
    }
} else {
    echo 'No file selected or form not submitted<br>';
}




?>