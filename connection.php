<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass= '';
$db='zoho';

// Create connection
$dbconn=mysqli_connect($dbhost,$dbuser,$dbpass);
mysqli_select_db($dbconn,$db);

?>

