<?php
print("Please specify the name of the control family to view");
print("<p>");
$file=$_GET['family'];
system("cat $file");
?>