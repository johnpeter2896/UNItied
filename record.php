<?php

 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "phpmyadmin";
 $con = new mysqli($servername, $username, $password, $dbname);

 session_start();

 $ProgrammeName=$_POST['programmeName'];
 $Description=$_POST['description'];
 $ClosingDate=$_POST['closingDate'];
 $Programmeid = uniqid();



 $sql = "INSERT INTO programme(programmeID, programmeName, description, closingDate)
         VALUES ('$Programmeid','$ProgrammeName', '$Description', '$ClosingDate')";



if (mysqli_query($con, $sql)) {
 echo '<script type="text/javascript">
         alert("Registration complete!");
         window.location.href="RecordProgramme.php";
       </script>';
} else {
 echo '<script type="text/javascript">
         alert("ERROR: Could not execute '.$sql. '. ' .mysqli_error($con).'");
         window.location.href="signup.php";
       </script>';
}

mysqli_close($con);
?>
