<?php include('server.php'); ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link href="css/UNItiedAdminLogin.css" rel="stylesheet" type="text/css">
  <title>LogIn</title>
</head>

<body>
  <div class="loginbox">
    <h1>UNItied AdminLogin</h1>

    <form method="post" action="UNItiedAdminLogin.php">
      <div class="textbox">
        <i class="fa fa-user" aria-hidden="true"></i>
        <input type="text" placeholder="Username" name="adminUsername" required>
      </div>
      <div class="textbox">
        <i class="fa fa-lock" aria-hidden="true"></i>
        <input type="password" placeholder="Password" name="adminPassword" required>
      </div>

      <button class="btn" type="submit" name="login">Log In</button>
    </form>

    <a href="UNItiedAdminSignup.php">
      <input class="btn" type="button" name="" value="Back">
    </a>
  </div>
</body>

</html>
