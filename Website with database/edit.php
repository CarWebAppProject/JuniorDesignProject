<?php
$con= mysqli_connect('localhost', 'user', '','NewsFeed');

if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "UPDATE documents SET Status= '$_POST[Status]' WHERE ID= '$_POST[ID]'";

if(mysqli_query($con,$sql)){
  header("refresh:1; url = NewsFeed.php");
}
else {
  echo "NOT Updated";
}

 ?>
