<?php
session_start();
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "warfortrezor";

$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);

    $sql= "SELECT enrollment,score FROM users";
    mysqli_query($conn,$sql);
?>
