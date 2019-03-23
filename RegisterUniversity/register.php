<?php

 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "phpmyadmin";
 $con = new mysqli($servername, $username, $password, $dbname);

 session_start();

 $UniversityName=$_POST['uniName'];
 $id = uniqid();

   $sql = "INSERT INTO university(universityID, universityName)
           VALUES ('$id','$UniversityName')";

$_SESSION["universityID"] = "$id";

 if (mysqli_query($con, $sql)) {
   echo '<script type="text/javascript">
           alert("Registration complete!");
           window.location.href="RegisterUniAdmin.php";
         </script>';
 } else {
   echo '<script type="text/javascript">
           alert("ERROR: Could not execute '.$sql. '. ' .mysqli_error($con).'");
           window.location.href="signup.php";
         </script>';
 }

 mysqli_close($con);
?>
