<?php include('server.php'); ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link href="css/UNItiedAdminSignup.css" rel="stylesheet" type="text/css">
  <title>UNItied Admin Sign Up</title>
</head>

<body>
  <div class="loginbox">
    <h1>UNItied AdminSignup</h1>

    <form method="post" action="UNItiedAdminSignup.php">
      <div class="textbox">
        <i class="fa fa-user" aria-hidden="true"></i>
        <input type="text" placeholder="Username" name="adminUsername" required>
      </div>

      <div class="textbox">
        <i class="fa fa-lock" aria-hidden="true"></i>
        <input type="password" placeholder="Password" name="adminPassword" required>
      </div>

      <button class="btn" type="submit" name="submit">Register</button>
    </form>

    <a href="UNItiedAdminLogin.php">
      <input class="btn" type="button" name="" value="Log In">
    </a>
  </div>
</body>

</html>
