<html>
<head>
  <meta charset="UTF-8">
	<title>Quiz</title>
  <link rel="icon" href="https://i.imgur.com/hmaZoKf.gif" type="image/gif">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="asset/css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <script>
        if(window.history.forward(1) != null)
        window.history.forward(1);
   </script>
</head>

<body>


<div align="center">
<br><br><br><br><br>
<h1>WAR FOR TREZOR</h1>
</div>

<form action="loginconnect.php" method="post">
<div class="box black">
<div align="center">
  <br>
<h2 style="color:white">Login to participate in war for trezor..</h2>
<br>
    <div class="container">
      <input type="text" placeholder=" Name " name="name">
        <br>
      <input type="text" placeholder=" Enrollment No. " name="enrollment">
        <br><br>
      <button type="submit" name="submit" ><strong>Login</strong></button>
      <br><br>
      <label>
        
      </label>
    </div>
  </div>
</div>
</form>

<form action="signup.php" method="post">
 <div align="center">
  <br>
    <div class="container">
      <p style="color:white"><strong>Didn't registered yet?</strong><br><button type="submit" href="signup.php"><strong>Register</strong></button></p>
    </div>
  </div>
</form>

</body>
</html>
