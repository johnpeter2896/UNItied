<?php include('server.php'); ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Add Qualification</title>
  <link href="css/AddQualification.css" rel="stylesheet" type="text/css">
</head>

<body>
  <div id="header">
    <div class="container">
      <div id="logoArea">
        <img src="img/logo.png" alt="logo">
      </div>
      <div id="navArea">
        <ul id="nav">
          <li>Welcome </li>
          <?php if(isset($_SESSION['adminUsername'])): ?>
            <li><strong><?php echo $_SESSION['adminUsername']; ?></strong></li>
          <?php endif ?>
          <li><a href="UNItiedAdminLogin.php?logout='1'">Log out</a></li>
        </ul>
      </div>
    </div>
  </div>

  <div id="mainArea">
    <div class="container page">
      <h3>Add Qualification</h3><br>

      <form method="post" action="AddQualification.php">

        <div class="textbox">Qualification Name:
          <input type="text" name="qualName" required>
        </div>

        <div class="textbox">Minimum Score:
          <input type="text" name="minScore" required>
        </div>

        <div class="textbox">Maximum Score:
          <input type="text" name="maxScore" required><br>Grade List:
        </div>

        <textarea rows = "12" cols = "50" name = "grdList">
        </textarea>

        <div class="textbox">Description:
          <input type="text" name="resultCalcDesc" required>
        </div>

        <button class="btn" type="submit" name="addQualification">Add Qualification</button>
      </form>
    </div>
  </div>

  <div id="footer">
    <div class="container">©2019, UNItied. All rights reserved.</div>
  </div>

</body>

</html>
