<?php
session_start();
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "warfortrezor";

$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname,3306);

//saving the enrollment number
$enrollment = $_SESSION["enrollment"];
    	//it will excute if user try to ascess this page using the url
		if($_SESSION["enrollment"]==="")
		{
				header("location: index.php");
				exit();
		}
		else
		{
        //from afterlogin.php
		if(isset($_POST['submitnew']))
		{
          $sql="SELECT * FROM users WHERE enrollment ='$enrollment'";
		  $result_score= $conn->query($sql);
		  if ($result_score->num_rows > 0) 
		  {
		  $row = $result_score->fetch_assoc();
	   	  $score = $row['score'];
		  }
		  //if answer is wrong then the score as well as quiestion id is not gonna change
		  $sql="SELECT * from questions WHERE id = '$score'";
		  $result= $conn->query($sql);
		  if ($result->num_rows > 0) 
		  {
		  $row = $result->fetch_assoc();	
		  $url=$row['image'];
		  }
          header("location: question.php?id=".$url);
		  $qid=0;
		  exit();
        }
		//from question.php
    	elseif(isset($_POST['submit']))
		{
			$answer = $conn->real_escape_string($_POST['answer']);
			$qid = $conn->real_escape_string($_POST['qid']);
            $answer = strtolower($answer);
		}
		        		$sql="SELECT * FROM users WHERE enrollment ='$enrollment'";
		        		$result = $conn->query($sql);
						if ($result->num_rows > 0) 
						{
						$row = $result->fetch_assoc();	
						$score = $row['score'];
						}

				$sql="SELECT * FROM questions WHERE id ='$score'";
				$result= $conn->query($sql);
				if ($result->num_rows > 0) 
				{
					 	$row = $result->fetch_assoc();
						if($answer === $row['answer'])
					{
						{ 
						//saving enrollmrnt for further use
						$enrollment = $_SESSION["enrollment"];
						//only get change on the enrollment of that data
						$sql="SELECT * FROM users WHERE enrollment ='$enrollment'";
						$result_score= $conn->query($sql);
						if ($result_score->num_rows > 0) 
						{
						$row = $result_score->fetch_assoc();
						$score = $row['score']+1;
						}
						//current date and time
						$date = date('Y-m-d H:i:s');
						//updating the score
						$sql="UPDATE users SET score='$score' WHERE enrollment='$enrollment'";
						$conn->query($sql);
						//updating the last question time
						$sql="UPDATE users SET last_ques_time='$date' WHERE enrollment='$enrollment'";
						$conn->query($sql);
						//selecting new url of image
						$sql="SELECT * from questions WHERE id = '$score'";
						$result= $conn->query($sql);
						if ($result->num_rows > 0) 
						{
						$row = $result->fetch_assoc();	
						$url=$row['image'];
			        	}
			        	if($url=="completed")
			        		{header("location: leaderboard.php");}
			        	else
			        	{
			        	//sending the url using concatation
						header("location: question.php?id=".$url);
					    } 
						exit();
						}
					}
					    //if the answer is not matched with database and with same id
						else
						{
							//to prevent the too many reloading of the webpage
							if($qid==1)
							{
                                $sql="SELECT * FROM users WHERE enrollment ='$enrollment'";
									$result_score= $conn->query($sql);
									if ($result_score->num_rows > 0) 
									{
									$row = $result_score->fetch_assoc();
									$score = $row['score'];
									}
									//if answer is wrong then the score as well as quiestion id is not gonna change
								$sql="SELECT * from questions WHERE id = '$score'";
									$result= $conn->query($sql);
									if ($result->num_rows > 0) 
									{
									$row = $result->fetch_assoc();	
									$url=$row['image'];
						        	}
								header("location: question.php?id=".$url);
								$qid=0;
								exit();
							}
						}
			    }
        }
?>
