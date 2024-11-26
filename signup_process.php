<?php
echo 'process';
require 'connect.php';
session_start();
print_r($_POST);

if (isset($_POST['submit'])) {
    $fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$email=$_POST['email'];
$add=$_POST['address'];
$pass=$_POST['password'];
 print_r($_POST);

$queryone="SELECT * FROM `users_table` WHERE `email`='$email'";
$databaseconect=$connection->query($queryone);

if($databaseconect){
    print_r($databaseconect);
}
if($databaseconect->num_rows>0){
    echo "email already exist";
    $_SESSION['msg']='Email already exist';
    header('location:signup.php');
}
else{
    $hash=password_hash($pass,PASSWORD_DEFAULT);
// echo $hash;

$query="INSERT INTO `users_table`(`firstname`, `lastaname`, `email`, `address`, `password`) VALUES ('$fname','$lname','$email','$add','$hash')";

$dbconnect=$connection->query($query);
if($dbconnect){
    // echo "success";
    $_SESSION['msg']='Account created successfully';
    header('location:login.php');
}
else{
    echo "error";
}

}
}
else{
    header('location:signup.php');
}





?>