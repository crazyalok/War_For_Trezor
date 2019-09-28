<?php
session_start();
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "warfortrezor";

$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);

    $enrollment = $_SESSION["enrollment"];
    $sql= "SELECT * FROM responses";
    mysqli_query($conn,$sql);
?>
