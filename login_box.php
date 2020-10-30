<?php
include("can.php");
  $name=$_POST['name'];
  $email=$_POST['email'];
  $massage=$_POST['massage'];
    $sql_r= "INSERT INTO `portfollio_sp`(`name`, `email`, `massage`) VALUES ('$name','$email','$massage')";
    $sql=mysqli_query($con,$sql_r);
    if($sql==true){
      echo "success";
    }else{
      echo "Fail_submit";
    }
 ?>
