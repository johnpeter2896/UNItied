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



   $sql = "SELECT * FROM uniadmin";
   $result = $con->query($sql);

   if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      if($Username == $row["username"] &&  $Password == $row["password"]){
        $_SESSION['theName'] = $row["name"];
        $uniID = $row["universityID"];
      //  $_SESSION['testing'] =  $row["universityID"];
        if (mysqli_query($con, $sql)) {
          $sql = "SELECT universityName FROM university WHERE universityID = '$uniID'";
          $result = $con->query($sql);
          while ($row = $result->fetch_assoc()) {
          $universityName=  $row['universityName'];
          }
          $_SESSION['theUniName'] = $universityName;

          echo '<script type="text/javascript">
                  alert("Correct Login!");
                  window.location.href="UniAdminLoginMenu.php";
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
