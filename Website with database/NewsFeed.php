<?php
//include "configNewsPage.php";
include "menubar.php";
include "login.php";

?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="tableStyle.css">
<link rel="stylesheet" type="text/css" href="Fonts.css" />
    <head></head>
    <body>
        <h1>Your Documents</h1>
        <hr>

        <p>
        This will be the page for the NewsFeed.
        </p>

      <br>

</html>

<!-- <?php

$link = mysqli_connect("localhost", "user", "", "");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// This will show all the stuff in one of the database qureies
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
            echo "<tr><form action='edit.php' method=POST>";
                echo "<td>" . $row['ID'] . "</td>";
                echo "<input type=hidden name=ID value='" .$row['ID']."'>";
                echo "<td>" . $row['Name_Of_Document'] . "</td>";
                echo "<td>" . $row['Owner'] . "</td>";
                echo "<td>" . $row['Due Date'] . "</td>";
                echo "<td><input type=text name=Status value='" .$row['Status'] ."'</td>";
                echo "<input type=submit value=Submit></form>";

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
