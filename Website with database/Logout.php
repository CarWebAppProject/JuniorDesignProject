<?php
include "menubar.php";
include "config.php";


if(isset($_POST['but_logout'])){
      session_destroy();
      header('Location: Homepage.php');
  }
  ?>

 <form method='post' action="">
     <input type="submit" value="Logout" name="but_logout">
 </form>
