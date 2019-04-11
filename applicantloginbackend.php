<?php

 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "phpmyadmin";
 $con = new mysqli($servername, $username, $password, $dbname);

 session_start();

 $applicantUsername=$_POST['appuser'];
 $applicantPassword=$_POST['apppass'];


   $sql = "SELECT * FROM applicant";
   $result = $con->query($sql);

   if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()) {
      if($applicantUsername == $row["ApplicantUsername"] &&  $applicantPassword == $row["ApplicantPassword"]){
        
          echo '<script type="text/javascript">
                  alert("Login Successfull!");
                  window.location.href="ProgrammeList.php";
                </script>';
       }
      }
    } // end while
    echo '<script type="text/javascript">
          alert("ERROR: Username or password invalid.");
            window.location.href="ApplicantLogin.php";
          </script>';

 mysqli_close($con);
?>
