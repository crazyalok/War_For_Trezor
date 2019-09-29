<?php
session_start();
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "warfortrezor";

$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname,3306);

if (isset($_POST['submit'])) {
	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$enrollment = mysqli_real_escape_string($conn, $_POST['enrollment']);
    $name = strtoupper($name);
    $enrollment = strtoupper($enrollment);
}
	if (empty($name)||empty($enrollment)) 
	{
		header("location: signup.php?signup=empty");
		exit();
	}
	else
	{ 
        //change [6-9] as it depend for what year it has been made like 161b000 to 191b000
        if(preg_match('/^[1-1][6-9][1-1]/', $enrollment) && preg_match('/[0-9][0-9][0-9]$/', $enrollment) && strlen($enrollment)>=6 && strlen($enrollment)<=7 && strlen($nname)>0)
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
					$sql= "INSERT INTO users (name,enrollment,score,created_at,last_ques_time) VALUES ('$name','$enrollment','1','$date','$date');";
					mysqli_query($conn,$sql);
					
			if($name && $enrollment) 
			{
            header('location: afterlogin.php');
            $_SESSION["enrollment"] = "$enrollment";
            } 
							exit();
		}
	}
?>
