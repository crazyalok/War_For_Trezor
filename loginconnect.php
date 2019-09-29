<?php
session_start();
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "warfortrezor";

$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname,3306);

if(isset($_POST['submit']))
{
	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$enrollment = mysqli_real_escape_string($conn, $_POST['enrollment']);
    $name = strtoupper($name);
    $enrollment = strtoupper($enrollment);
}

if(empty($enrollment) || empty($name))
{
		header("location: index.php?login=empty");
		exit();
	}
		else
		{

		$sql="SELECT * FROM users WHERE enrollment ='$enrollment'";
		$result= mysqli_query($conn, $sql);
		$resultcheck = mysqli_num_rows($result);

		if($resultcheck < 1)
		{
			header("location: index.php?login=error_wrong_enrollment_number");
			exit();
		}
		else
		{
			$row = mysqli_fetch_assoc($result);
			if (count($row)) 
			{
				if($row['name']=="$name" && $row['enrollment']=="$enrollment")
				{ 
				header("location: afterlogin.php");
				$_SESSION["enrollment"] = "$enrollment";
				//$_SESSION["valuex"] = "1";
				}
				else
				{
					header("location: index.php?login=error_wrong_password");
						exit();
				}
	        }
	    }
	}
?>
