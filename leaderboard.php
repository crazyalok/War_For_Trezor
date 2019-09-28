<html>
<head>
	<title>Quiz</title>
  <link rel="icon" href="mil.png" type="image/x-icon">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="asset/css/style.css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
</head>

<?php include 'leaderboardconnect.php';?>

<body>
    
 <img src="mil.png" align="center" height="120" width="110">

  <div class="navbar" align="right">
    <div align="right">
    <a href="question.php">Home</a> 
    <a href="logout.php">Logout</a>
  </div>
</div>

<header></header>
<div class="main-wrapper">
  <div class="table-wrapper">
  <table class="demo-table" >
    <thead>
      <tr>
        <th>Enrollment</th>
        <th>Score</th>
      </tr>
    </thead>
    <tbody>
      <?php if ($result = $mysqli->query($query)) { ?>
        <?php while ($row = $result->fetch_assoc()) { ?>
             <?php 
                    $field1name = $row["Enrollment"];
                    $field2name = $row["Score"];
                     ?>
      <tr>
        <td><?php echo '<b>'.$field1name.'</b>';?></td>
        <td><?php echo '<b>'.$field2name.'</b>';?></td> 
      </tr>

          <?php } ?>
        <?php } ?>
    </tbody>
  </table>
  </div>
</div>

</body>
</html>
