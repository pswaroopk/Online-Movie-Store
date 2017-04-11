<?php

$movie_category = $_POST['movie_category'];
$limit = $_POST['limit'];

//error_log(print_r($movie_category, TRUE));


//include("init.php");
session_start();
$sql_connect=mysqli_connect('localhost','root','root','movie_store');

$query = "SELECT * FROM movies where id >=".$limit ;
$result=mysqli_query($sql_connect,$query);

while($row=$result->fetch_assoc())

{
    $table_data[]= array("id"=>$row['Id'],"category" =>$row['Category'],"name"=>$row['Name'],"year"=>$row['Year'],"img"=>$row['Img_url'],"cost"=>$row['Cost']);
}

echo json_encode($table_data);


?>

