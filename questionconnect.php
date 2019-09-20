<?php

session_start();
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "warfortrezor";

$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);
if(isset($_POST['submit']))
{
	$answer = mysqli_real_escape_string($conn, $_POST['answer']);
}

if(empty($answer))
{
		header("location: question.php");
		exit();
}
		else
		{
        		$sql="SELECT * FROM users WHERE enrollment ='$enrollment'";
				$result= mysqli_query($conn, $sql);
				$row = mysqli_fetch_assoc($result);
				if (count($row)) 
				{
				$score = $row['score'];
				}
		$sql="SELECT * FROM questions WHERE answer ='$answer' AND id ='$score'";
		$result= mysqli_query($conn, $sql);
	   	$row = mysqli_fetch_assoc($result);

		if (count($row)) 
		{
				if($answer === $row['answer'])
				{ 
				$enrollment = $_SESSION["enrollment"];
				$sql="SELECT * FROM users WHERE enrollment ='$enrollment'";
				$result= mysqli_query($conn, $sql);
				$row = mysqli_fetch_assoc($result);
				if (count($row)) 
				{
				$score = $row['score']+1;
				}
				$date = date('Y-m-d H:i:s');
				$sql="UPDATE users SET score='$score' AND last_ques_time='$date' WHERE enrollment='$enrollment'";
				mysqli_query($conn,$sql);	
				$sql="SELECT * from questions WHERE id = '$score'";
				$result= mysqli_query($conn, $sql);
				$row = mysqli_fetch_assoc($result);
				if (count($row)) 
				{
				$url=$row['image'];
	        	}
				header("location: question.php");
				$_SESSION["url"] = "$url";
				exit();
				}
				else
				{
						header("location: question.php");
						exit();
				}
	    }
		}
?>
