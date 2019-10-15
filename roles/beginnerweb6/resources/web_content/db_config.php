<?php
// Create connection
$DBUSER = 'webserver';
$DBPASS = 'demoPass#00';

$con=mysqli_connect("127.0.0.1",$DBUSER,$DBPASS,"sqlitrainingctf");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "<font style=\"color:#FF0000\">Could not connect:". mysqli_connect_error()."</font\>";
  }
?>