<?php
//Connect To Database
$hostname   = getenv('DB_HOSTNAME');
$username   = getenv('DB_USERNAME_PUBLIC');
$password   = getenv('DB_PW_PUBLIC');
$dbname     = getenv('DB_NAME');

$connection = mysqli_connect($hostname, $username, $password, $dbname);
?>