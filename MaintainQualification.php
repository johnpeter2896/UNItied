<?php include('server.php'); ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Maintain Qualification</title>
  <link href="css/MaintainQualification.css" rel="stylesheet" type="text/css">
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
      <h3>List of Qualifications</h3><br>
      <table>
        <tr>
          <th>Qualification Name</th>
          <th>Maximum Score</th>
          <th></th>
        </tr>
        <?php
          $con = mysqli_connect("localhost", "root", "", "unitied");
          if($con -> connect_error)
          {
            die("Connection failed: " . $con -> connect_error);
          }
          $id = $_SESSION['adminUsername'];
          $sql = "SELECT qualificationName, maximumScore FROM maintainqualification";
          $result = $con -> query($sql);
          if($result -> num_rows > 0)
          {
            while($row = $result -> fetch_assoc())
            {
              echo "<tr><td>" . $row["qualificationName"] . "</td><td>" . $row["maximumScore"] . "</td><td>"
              . '<a href="#' . '">Edit Qualification</a></td></tr>';
            }
          }
        ?>
      </table><br><br>

      <a href="AddQualification.php">
        <input class="btn" type="button" name="" value="Add Qualification">
      </a>
    </div>
  </div>

  <div id="footer">
    <div class="container">©2019, UNItied. All rights reserved.</div>
  </div>

</body>

</html>
