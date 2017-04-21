<?php
session_start();
include 'fetch_movies.php';
$movie_name = $_POST['movie_name'];
$user_name = $_POST['user_name'];

$sql_connect=mysqli_connect('localhost','root','root','movie_store');

$query = "DELETE FROM cart WHERE Username='$user_name' AND Name='$movie_name'" ;
$result=mysqli_query($sql_connect,$query);
// header("Location:show_cart.php");
// $jdata = fetch_movies();
// echo $jdata;
error_log(print_r($result, TRUE));


?>
