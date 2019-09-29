<?php
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "warfortrezor";
$mysqli = new mysqli($dbservername, $dbusername, $dbpassword, $dbname,3306);
 
$query = "SELECT name,score FROM users ORDER BY score DESC";
?>
