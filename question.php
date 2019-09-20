<?php 
session_start();
if(isset($_SESSION["enrollment"])!= "")
{?>
<html>
<head>
  <meta charset="UTF-8">
	<title>Quiz</title>
  <link rel="icon" href="mil.png" type="image/x-icon">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="asset/css/style.css">
</head>

<body>
<form action="questionconnect.php" method="post">
<!--<form action="q1connect.php" method="post">-->
<div class="box black">
<div align="center">
<h1>WAR FOR TREZOR</h1>
<?php $url=$_SESSION["url"]?>
<img src="<?php echo $url?>">
    <div class="container">
      <input type="text" placeholder="Your Answer" name="answer">
        <br>
      <button type="submit" name="submit" value="0"><strong>Submit</strong></button>
      <br><br>
    </div>
  </div>
</div>
</form>
<!--</form>-->
<div class="footer">
  <img src="asset/image/ig.png" width="50" height="50">
  <img src="asset/image/fb.png" width="50" height="50">
  <img src="asset/image/link.png" width="50" height="50">
</div>

</body>
</html>
<?php
                 }

            else{
                    echo ('<meta http-equiv="refresh" content="0; URL=login.php">');
                }
?>