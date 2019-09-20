<?php
session_start();

$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "quiztrack";

$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);
if(isset($_POST['submit']))
{
	$answer = $_POST['answer'];
	$question = $_POST['submit'];
}
    $enrno = $_SESSION["enrno"];
    $sql= "INSERT INTO leaderboard VALUES ('$question','$enrno','$answer');";
					mysqli_query($conn,$sql);
?>
