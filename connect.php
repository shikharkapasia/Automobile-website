<?php
$connect= mysqli_connect("localhost","root","") or die("server not connected");
mysqli_select_db($connect,"appointment") or die("database not connected");
?>

