<?php
include "config.php";

if(isset($_POST['but_submit'])){

    $uname = mysqli_real_escape_string($con,$_POST['txt_uname']);
    $password = mysqli_real_escape_string($con,$_POST['txt_pwd']);

    if ($uname != "" && $password != ""){

        $sql_query = "select * from Login_Details where UserName= '$uname' and Password= '$password'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        if($row['UserName'] == $uname && $row['Password'] == $password){
          //echo $row['UserName'];

            header("Location: NewsFeed.php ");
        }

        else{
            echo "Invalid username and password";

        }

    }

}
?>
