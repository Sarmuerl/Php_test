<?php
require 'connect.php';
session_start();
$userID = $_SESSION['user_id'];
echo $userID;
 
echo "Welcome to dashboard";
// if (!isset($_SESSION['user_id'])) {
// echo "please login to access the dashboard";
// exit;
// }
// $imagePath = isset($_SESSION['uploaded_image'])? $_SESSION['uploaded_image'] : null;

$query = "SELECT * FROM users_table WHERE user_id = $userID";
$connect=$connection->query($query);

if ($connect){
    if ($connect->num_rows > 0){
        $user = $connect->fetch_assoc();
        $firstname = $user['firstname'];
        $email = $user['email'];
        $profile = $user['profile_picture'];
        $_SESSION['fname'] = $firstname;
        $_SESSION['email'] = $email;
        $_SESSION['profile'] = $profile;
        $filetype = $_SESSION['filetype'];

    }else{
        echo "no user found";
    }
}
else{
    echo "No connection";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>WELCOME TO DASHBOARD</h1>
    <h1>NOTE APP</h1>


    <p> <?php echo "Hello " . $_SESSION['fname'] . " your email is " . $_SESSION['email'] . " and your profile picture is " . $_SESSION['profile'] . " and your file type is " . $filetype; ?></p>

    <div>
        Welcome home <?php echo "<span>" .$_SESSION['fname']. "</span>"; ?>
    </div>

    <div>
        Your email is <?php echo "<span>" .$_SESSION['email']. "</span>"; ?>
    </div>

    <div>
        <form action="pictureuploads.php" method="post" enctype="multipart/form-data">
            <input type="file" name="picture">
            <input type="submit" value="Upload Image" name="submit">
        </form>
    </div>

    <?php
        echo "<img src='pictureuploads/" . $profile. "' alt='profile picture' style='width: 50;'/>";

    ?>

    <p><?php echo $filetype ?></p>


</body>
</html>