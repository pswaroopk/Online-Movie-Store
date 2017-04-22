<?php

$movie_category= $_POST['movie_category'];

session_start();
$sql_connect=mysqli_connect('localhost','root','root','movie_store');

if ($movie_category == 'All'){
    $query = "SELECT count(*) FROM movies WHERE movie_flag=1"  ;
}
else{
    $query = "SELECT count(*) FROM movies where movie_flag=1 AND Category ='" . $movie_category . "'";
}
$result=mysqli_query($sql_connect,$query);

$row=$result->fetch_assoc();

//error_log(print_r($row['count(*)'], TRUE));

echo $row['count(*)'];
?>
