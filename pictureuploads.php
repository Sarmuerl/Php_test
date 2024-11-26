<?php
echo "Picture page";
session_start();
$userID = $_SESSION['user_id'];
require 'connect.php';
if (isset($_POST['submit'])) {
    $name = $_FILES['picture']['name'];
    $temp = $_FILES['picture']['tmp_name'];
    $filetype = $_FILES['picture']['type'];
    $_SESSION['filetype'] = $filetype;
    print_r(value: $name);
    // print_r($filetype);
    echo "<br>";
    $newname = time().$name;
    $move = move_uploaded_file($temp, 'pictureuploads/'.$newname);
    if ($move) {
        echo "moved";
        $query = "UPDATE users_table SET profilepicture = '$newname' WHERE user_id = $userID";
        $conn=$connection->query($query);

        if ($conn) {
            // echo "<br/>";
            echo "updated";
            // header("Location: dashboard.php");
            //echo $conn;
        } else {
            echo "not updated";
        }
    } else {
        echo "not moved";
        }

    }
    else {
        echo "not set";
    }


?>