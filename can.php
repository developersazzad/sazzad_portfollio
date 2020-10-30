<?php
$host="localhost";
$user_name="sazzad";
$password="sazzad00";
$database_name="our_users";
$con=mysqli_connect($host,$user_name,$password,$database_name);
if($con==true){

}else{
  echo "connection false";
}
?>
