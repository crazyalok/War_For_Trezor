<html>
<head>
	<title>Quiz</title>
  <link rel="icon" href="https://i.imgur.com/hmaZoKf.gif" type="image/gif">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T">
  <link rel="stylesheet" href="asset/css/style.css">
  <link rel="stylesheet" href="asset/css/table.css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<?php include 'leaderboardconnect.php';?>

<body>

  <div class="navbar" align="right">
    <div align="right">
    <a href="afterlogin.php">Question</a> 
    <a href="logout.php">Logout</a>
  </div>
</div>

<div class="align500">
<div class="main-wrapper">
  <div class="table-wrapper">
  <table class="demo-table" >
    <thead>
      <tr>
        <th>Name</th>
        <th>Score</th>
      </tr>
    </thead>
    <tbody>
      <?php if ($result = $mysqli->query($query)) { ?>
        <?php while ($row = $result->fetch_assoc()) { ?>
             <?php 
                    $field1name = $row["name"];
                    $field2name = $row["score"]-1;
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
</div>

</body>
</html>
