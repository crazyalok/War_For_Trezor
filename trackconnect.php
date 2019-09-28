<?php
session_start();

$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "warfortrezor";

$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);
if(isset($_POST['submit']))
{
	$answer = $_POST['answer'];
	$question = $_POST['submit'];
}
    $enrollment = $_SESSION["enrollment"];
    $sql= "INSERT INTO leaderboard VALUES ('$question','enrollment','$answer');";
    mysqli_query($conn,$sql);
?>
