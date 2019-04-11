<?php

 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "phpmyadmin";
 $con = new mysqli($servername, $username, $password, $dbname);

 session_start();

 $Username=$_POST['username'];
 $Password=$_POST['password'];
 $UniversityAdminName=$_POST['name'];
 $Email=$_POST['email'];
 $uniID =$_SESSION["universityID"];



   $sql = "INSERT INTO  uniadmin(username, password, name, email, universityID)
           VALUES ('$Username','$Password','$UniversityAdminName','$Email', '$uniID')";



 if (mysqli_query($con, $sql)) {
   echo '<script type="text/javascript">
           alert("Registration complete!");
           window.location.href="LoginMenu.php";
         </script>';
 } else {
   echo '<script type="text/javascript">
           alert("ERROR: Could not execute '.$sql. '. ' .mysqli_error($con).'");
           window.location.href="signup.php";
         </script>';
 }

 mysqli_close($con);
?>
