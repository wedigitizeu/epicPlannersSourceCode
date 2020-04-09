<?php
   error_reporting(0);
   include_once("../db/db.php");
   session_start();
   




    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $pwd=mysqli_real_escape_string($conn,$_POST['password']);
   
    $sel="SELECT * FROM `admin` WHERE (email='$email') AND (password='$pwd')";
    $exe=mysqli_query($conn,$sel);
    if(mysqli_num_rows($exe)>0)
    {
      $data=mysqli_fetch_assoc($exe);
      $name=$data['name'];
      $_SESSION["uname"]=$name;
?>
      <script type="text/javascript">
         window.location.href="dashboard.php";
      </script>
      
<?php

    }
    else
    {
       $_SESSION["invalid"]='Invalid User';
       echo 'Invalid User <i class="em em-face_with_raised_eyebrow" aria-role="presentation" aria-label="FACE WITH ONE EYEBROW RAISED"></i>';
    }
   



?>
