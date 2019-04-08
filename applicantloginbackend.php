<?php

 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "phpmyadmin";
 $con = new mysqli($servername, $username, $password, $dbname);

 session_start();

 $ApplicantUsername=$_POST['applicantUsername'];
 $ApplicantPassword=$_POST['applicantPassword'];



   $sql = "SELECT * FROM applicant";
   $result = $con->query($sql);

   if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()) {
      if($ApplicantUsername == $row["applicantUsername"] &&  $ApplicantPassword == $row["applicantPassword"]){
        if (mysqli_query($con, $sql)) {

          echo '<script type="text/javascript">
                  alert("Login Successfull!");
                  window.location.href="ProgrammeList.php";
                </script>';
       }
      }
    } // end while
    }
    echo '<script type="text/javascript">
          alert("ERROR: Username or password invalid.");
            window.location.href="ApplicantLogin.php";
          </script>';

 mysqli_close($con);
?>
