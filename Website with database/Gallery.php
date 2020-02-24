<?php
include "menubar.php";
?>
<!DOCTYPE html>
<html>
 <link rel="stylesheet" href="tableStyle.css">
 <link rel="stylesheet" type="text/css" href="Fonts.css" />
  <head>
    <h1>All Documents</h1>

    <hr>
 </head>
</html>

<!-- <?php

$link = mysqli_connect("localhost", "user", "", "cdrl_tracker");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Attempt select query execution
$sql = "SELECT * FROM documents";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>ID</th>";
                echo "<th>Name of Document</th>";
                echo "<th>Owner</th>";
                echo "<th>Due Date</th>";
                echo "<th>Status</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['ID'] . "</td>";
                echo "<td>" . $row['Name_Of_Document'] . "</td>";
                echo "<td>" . $row['Owner'] . "</td>";
                echo "<td>" . $row['Due_Date'] . "</td>";
                echo "<td>" . $row['Status'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?> -->
