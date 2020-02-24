<?php
include "menubar.php";
//include "Add.php";
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<link rel="stylesheet" href="Search.css">
<link rel="stylesheet" type="text/css" href="Fonts.css" />
  <head>


    <meta charset="utf-8">
    <title></title>
  </head>
<form method = "POST" action="Add.php">
    <h1>Add Documents</h1>
    <p>Please fill in this form to add any documents to the database</p>
    <hr>
<div class="container">
    <label for="ID"><b>ID</b></label>
    <input type="text" placeholder="Enter ID" name="ID" required>

    <label for="Doc_Name"><b>Name of Document</b></label>
    <input type="text" placeholder="Name of Document" name="Doc_Name" required>

    <label for="Owner"><b>Name of Owner</b></label>
    <input type="text" placeholder="Name Of Owner" name="Owner" required>

    <label for="date"><b>Due Date</b></label>
    <input type="date" placeholder="Due Date" name="date" required>

    <label for="Status"><b>Status</b></label>
    <input type="text" placeholder="Status" name="Status" required>
    <hr>

    <button type="submit" class="subs">submit</button>
  </div>

  </div>
</form>
</html>
