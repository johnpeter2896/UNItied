<?php
  session_start();
  $error = 0;

  //UNItied Admin
  $adminUsername = "";
  $adminPass = "";

  //Maintain Qualification
  $qualificationID = "";
  $qualificationName = "";
  $minimumScore = "";
  $maximumScore = "";
  $resultCalcDescription = "";
  $gradeList = "";

  //Connect to database
  $con = new mysqli("localhost", "root", "", "unitied");

  //If the register button is clicked
  //UNItied Admin Sign Up
  if(isset($_POST['submit']))
  {
    $adminUsername = $POST['adminUsername'];
    $adminPass = $POST['adminPassword'];

    $query = "SELECT * FROM unitiedadmin WHERE adminUsername = '$adminUsername'";
    $r = mysqli_query($con, $query);

    if(mysqli_num_rows($r) == 1)
    {
      $_SESSION['message'] = "The username or password is incorrect";
      header('location: UNItiedAdminSignup.php?error=1');
    }
    else
    {
      //Encrypt password before storing to database
      $adminPassword = md5($adminPass);
      $sql = "INSERT INTO unitiedadmin(adminUsername, adminPassword) VALUES ('$adminUsername', '$adminPassword') ";

      mysqli_query($con, $sql);
      header('location: UNItiedAdminLogin.php');
    }
  }

  //If the login button is clicked
  //UNItied Admin Log In
  if(isset($_POST['login']))
  {
    $adminUsername = $POST['adminUsername'];
    $adminPass = $POST['adminPassword'];
    $adminPassword = md5($adminPass);

    $query = "SELECT * FROM unitiedadmin WHERE adminUsername = '$adminUsername' AND adminPassword = '$adminPassword'";
    $result = mysqli_query($con, $query);

    if(mysqli_num_rows($result) ==1)
    {
      $_SESSION['adminUsername'] = $adminUsername;
      $_SESSION['message'] = "You are logged in";
      header('location: MaintainQualification.php');
    }
    else
    {
      $_SESSION['message'] = "The username or password is incorrect";
      header('location: UNItiedAdminLogin.php?error=1');
    }
  }

?>
