<?php

$movie_name = $_POST['movie_name'];
// $user_name = $_POST['user_name'];
// $action = $_POST['action'];

session_start();
// $flag = 1;

$sql_connect=mysqli_connect('localhost','root','root','movie_store');
$query = "UPDATE movies SET movie_flag = 0 WHERE Name='$movie_name'";
$result=mysqli_query($sql_connect,$query);
error_log(print_r($result, TRUE));
?>
