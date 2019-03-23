<?php

 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "phpmyadmin";
 $con = new mysqli($servername, $username, $password, $dbname);

 session_start();

 $Username=$_POST['username'];
 $Password=$_POST['password'];
 $uniID =$_SESSION["universityID"];



   $sql = "SELECT  username, password FROM uniadmin";
   $result = $con->query($sql);

   if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      if($Username == $row["username"] &&  $Password == $row["password"]){
        if (mysqli_query($con, $sql)) {
          echo '<script type="text/javascript">
                  alert("Correct Login!");
                  window.location.href="RecordProgramme.php";
                </script>';
        }
      }
    } // end while
    }
    echo '<script type="text/javascript">
          alert("ERROR: Username or password invalid.");
            window.location.href="Login.php";
          </script>';

 mysqli_close($con);
?>
