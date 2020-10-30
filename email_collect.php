<?php
include("can.php");
  $email=$_POST['email_sp_c'];
    $sql_r= "INSERT INTO `email_sp`(`email_sp`) VALUES ('$email')";
    $sql=mysqli_query($con,$sql_r);
    if($sql==true){
      echo "success sand email.";
    }else{
      echo "Fail_submit email.";
    }
 ?>
