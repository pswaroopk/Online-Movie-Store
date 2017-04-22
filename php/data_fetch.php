<?php

$movie_category = $_POST['movie_category'];
$limit = $_POST['limit'];

//error_log(print_r($movie_category, TRUE));
//error_log(print_r($limit, TRUE));
//include("init.php");
session_start();
$sql_connect=mysqli_connect('localhost','root','root','movie_store');

if ($movie_category == 'All')
{

    $query = "SELECT * FROM movies where id >=".$limit." order by id" ;
}
else{
    $query = "SELECT * FROM movies where Category ='".$movie_category."' and id >=".$limit." order by id"  ;
}
//$query = "SELECT * FROM movies where Category ='".$movie_category."' and id >=".$limit  ;
$result=mysqli_query($sql_connect,$query);

$num_rows = mysqli_num_rows($result);

if ($num_rows>0) {

    while ($row = $result->fetch_assoc()) {
        $table_data[] = array("id" => $row['Id'], "category" => $row['Category'], "name" => $row['Name'], "year" => $row['Year'], "img" => $row['Img_url'], "cost" => $row['Cost']);
    }

    echo json_encode($table_data);

}
else
{echo 0;}
?>
