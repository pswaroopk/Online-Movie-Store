<?php

$movie_name = $_POST['movie_name'];
$user_name = $_POST['user_name'];
$action = $_POST['action'];
session_start();

$sql_connect=mysqli_connect('localhost','root','root','movie_store');
if($action=='add'){
  $query = "INSERT INTO cart VALUES ('$user_name', '$movie_name', 1) ON DUPLICATE KEY UPDATE flag=1;";
}
else{
  $query = "UPDATE cart SET flag=0 WHERE Username='$user_name' AND Name='$movie_name'" ;
}
$result=mysqli_query($sql_connect,$query);
error_log(print_r($result, TRUE));

?>
