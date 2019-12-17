<?php
$DBUSER = 'webserver';
$DBPASS = 'demoPass#00';
system('mysql -u '.$DBUSER.' -p'.$DBPASS.' < sqlitraining_ctf.sql');
echo "DB reset!<br/>";
echo "Go back to <a href='/'>Home</a>";
?>