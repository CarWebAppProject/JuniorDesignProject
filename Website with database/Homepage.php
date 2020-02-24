<?php
include 'login.php';
 ?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" href="Login.css">
<link rel="stylesheet" type="text/css" href="Fonts.css" />
  <title>HomePage</title>
  <head>
    <h1 class= "sign" align= "Center">SOCIAL MEDIA APP FOR CARS</h1>

 </head>


<body>
  <p align ="Center">
  YOUR OWN ONLINE CAR SHOW!!
</p>
</body>

<br>
<br>
<body>


<div class="container">
        <div class= "main" id="div_login">
          <p class= "sign" align = "center">Login</p>
            <form class="form1" method="post" action="login.php">
            <div>
                <input type="text" class="un" id="txt_uname" name="txt_uname" placeholder="Username" required />
            </div>
            <div>
                <input type="password" class="pass" id="txt_upass" name="txt_pwd" placeholder="Password" required/>
            </div>
            <div>
                <input type="submit" class= "subs" align= "center" value="Submit" name="but_submit" id="but_submit" />
            </div>
        </div>
    </form>
</div>

</body>

</html>


<!-- <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<title>Sign in</title>
</head>

<body>
<div class="main" id= "div_login">
  <p class="sign" align="center">Sign in</p>
  <form class="form1" method ="post" action="login.php">
    <input class="textbox" type="text" id="txt_uname"  name="txt_uname" align="center" placeholder="Username">
    <input class="password" type="password" id="txt_upass" name="txt_pwd" align="center" placeholder="Password">
    <a class="submit" align="center" id="but_submit">Sign in</a>
</form>

  </div>

</body>

</html> -->
