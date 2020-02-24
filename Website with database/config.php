<?php

$user = "root";
$password = "root";
$dbname = "login";
$host = "localhost";
$port = 8889;
$socket = "/Applications/MAMP/tmp/mysql/mysql.sock";

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}
?>
