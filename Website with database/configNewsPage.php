<?php

$user = "root";
$password = "root";
$dbname = "cdrl_tracker";
$host = "localhost";
$port = 8889;

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}
?>
