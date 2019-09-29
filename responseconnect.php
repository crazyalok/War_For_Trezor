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
}
                $enrollment = $_SESSION["enrollment"];
				$sql="SELECT * FROM users WHERE enrollment ='$enrollment'";
				$result= mysqli_query($conn, $sql);
				$row = mysqli_fetch_assoc($result);
				if (count($row)) 
				{
				$enrollment = $row['enrollment'];
				$score = $row['score'];
				}
				$date = date('Y-m-d H:i:s');
                $sql= "INSERT INTO responses VALUES ('$enrollment','$score','$answer','$date');";
					mysqli_query($conn,$sql);
?>
