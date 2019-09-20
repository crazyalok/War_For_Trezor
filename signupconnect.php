<?php

session_start();

$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "warfortrezor";

$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);

if (isset($_POST['submit'])) {
	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$enrollment = mysqli_real_escape_string($conn, $_POST['enrollment']);
}
	if (empty($name)||empty($enrollment)) 
	{
		header("location: signup.php?signup=empty");
		exit();
	}
	else
	{ 
		if(strpos($enrollment, 'B') === false)
		 	{
			header("location: signup.php?signup=invalid_Enrollment_Number");
			exit();
			}
		else{
				$sql = "SELECT * FROM users WHERE enrollment='$enrollment'";
				$result = mysqli_query($conn,$sql);
				$resultcheck = mysqli_num_rows($result);

				if($resultcheck > 0)
				{
					header("location: signup.php?signup=Enrollment_number_taken");
					exit();
				} 
           			$row = mysqli_fetch_assoc($result);
   	                $date = date('Y-m-d H:i:s');
					$sql= "INSERT INTO users (name,enrollment,score,created_at,last_ques_time) VALUES ('$name','$enrollment','0','$date','$date');";
					mysqli_query($conn,$sql);
					
			if($name && $enrollment) 
			{
            header('location: question.php');
            $_SESSION["enrollment"] = "$enrollment";
            } 
							exit();
		}
	}
?>