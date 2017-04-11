<?php

session_start();
$sql_connect=mysqli_connect('localhost','root','root','movie_store');

$query = "SELECT count(*) FROM movies" ;
$result=mysqli_query($sql_connect,$query);

$row=$result->fetch_assoc();

//error_log(print_r($row['count(*)'], TRUE));

echo $row['count(*)'];
?>

