<?php
session_start();

$movie_name = $_POST['movie_name'];
$user_name = $_POST['user_name'];

error_log(print_r($movie_name, TRUE));
error_log(print_r($user_name, TRUE));
$sql_connect=mysqli_connect('localhost','root','root','movie_store');

$query = "INSERT INTO cart VALUES ('".$user_name."','".$movie_name."')" ;
$result=mysqli_query($sql_connect,$query);

//error_log(print_r($result, TRUE));

?>
