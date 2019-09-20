<html>
<head>
	<title>Tornado</title>
  <link rel="icon" href="mil.png" type="image/x-icon">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="asset/css/style.css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <script type="text/javascript" src="asset/javascript/jquery.particleground.js"></script>
  <script type="text/javascript" src="asset/javascript/demo.js"></script>
  <link rel="stylesheet" href="asset/css/display.css">
</head>

<?php include 'leaderboardconnect.php';?>

<body>
<div id="particles"><canvas class="pg-canvas" width="982" height="754" style="display: block;"></canvas>
  <div id="intro" style="margin-top: -357.5px;">
    
 <img src="mil.png" align="center" height="120" width="110">

  <div class="navbar" align="right">
    <div align="right">
    <a href="login.php">LOGIN or SIGNUP</a> 
    <a href="index.php">HOME</a>
  </div>
</div>

<header></header>
<div class="main-wrapper">
  <div class="table-wrapper">
  <table class="demo-table" >
    <thead>
      <tr>
        <th>Name</th>
        <th>Rank</th>
        <th>Updated By</th>
        <th>Updation Date</th>
        <th>Feats</th>
      </tr>
    </thead>
    <tbody>
      <?php if ($result = $mysqli->query($query)) { ?>
        <?php while ($row = $result->fetch_assoc()) { ?>
             <?php 
                    $field1name = $row["name"];
                    $field2name = $row["rank"];
                    $field3name = $row["updatedby"];
                    $field4name = $row["updatedate"];
                    $field5name = $row["feats"];
                     ?>
      <tr>
        <td><?php echo '<b>'.$field1name.'</b>';?></td>
        <td><?php echo '<b>'.$field2name.'</b>';?></td>
        <td><?php echo '<b>'.$field3name.'</b>';?></td>
        <td><?php echo '<b>'.$field4name.'</b>';?></td>
        <td><?php echo '<b>'.$field5name.'</b>';?></td>  
      </tr>

          <?php } ?>
        <?php } ?>
    </tbody>
  </table>
  </div>
</div>

</div>
</div>

</body></html>