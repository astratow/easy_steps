<?php
# MySQLi connection, functional approach
$host='localhost:3306';
$user='mike';
$pass='easysteps';
$db='site_db';
$dbc=mysqli_connect($host, $user, $pass, $db) OR die(mysqli_connect_error());
mysqli_set_charset($dbc, 'utf8');

?>
