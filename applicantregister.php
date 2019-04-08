<?php

 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "phpmyadmin";
 $con = new mysqli($servername, $username, $password, $dbname);

 session_start();

 $ProgrammeName=$_POST['programmeName'];

 $ApplicantUsername=$_POST['applicantUsername'];
 $ApplicantPassword=$_POST['applicantPassword'];
 $ApplicantName=$_POST['applicantName'];
 $ApplicantEmail=$_POST['applicantEmail'];
 $ApplicantIDType=$_POST['applicantIDType'];
 $ApplicantIDNo=$_POST['applicantIDNo'];
 $ApplicantMobileNo=$_POST['applicantMobileNo'];
 $ApplicantDOB=$_POST['applicantDOB'];



 $sql = "INSERT INTO applicant(applicantUsername, applicantPassword, applicantName, applicantEmail, applicantIDType ,applicantIDNo, applicantMobileNo, applicantDOB)
         VALUES ('$ApplicantUsername','$ApplicantPassword', '$ApplicantName', '$ApplicantEmail', '$ApplicantIDType', '$ApplicantIDNo', '$ApplicantMobileNo', '$ApplicantDOB')";



if (mysqli_query($con, $sql)) {
 echo '<script type="text/javascript">
         alert("Registration complete!");
         window.location.href="ApplicantLogin.php";
       </script>';
} else {
 echo '<script type="text/javascript">
         alert("ERROR: Could not execute '.$sql. '. ' .mysqli_error($con).'");
         window.location.href="ApplicantSignup.php";
       </script>';
}

mysqli_close($con);
?>
