<?php
$localhost='localhost';
$username='root';
$password='';
$db='octobercohort';

$connection  = new mysqli($localhost,$username, $password,$db);
if($connection->connect_error)
{
    echo "Not connected" .$connection->connect_error;
}
else
{
    echo "Connected Sucessfully";
}



?>