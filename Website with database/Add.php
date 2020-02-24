<?php
$con= mysqli_connect('localhost', 'user', '','NewsFeed');

if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$ID = mysqli_real_escape_string($con,$_REQUEST['ID']);
$DOC_Name = mysqli_real_escape_string($con,$_REQUEST['Doc_Name']);
$Owner = mysqli_real_escape_string($con,$_REQUEST['Owner']);
$Due_Date = mysqli_real_escape_string($con,$_REQUEST['date']);
$Status = mysqli_real_escape_string($con,$_REQUEST['Status']);
$query = mysqli_query("SELECT ID FROM documents WHERE ID='".$ID."'", $con);

if(mysqli_num_rows($query) != 0)
{
  echo "ID Already Exist";
}
else{
$sql = "INSERT INTO documents (ID, Name_Of_Document, Owner, Due_Date, Status)
VALUES ('$ID', '$DOC_Name', '$Owner', '$Due_Date', '$Status')";

if(mysqli_query($con,$sql)){
  header("refresh:1; url = NewsFeed.php");
  }
}
?>
