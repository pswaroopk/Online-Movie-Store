<?php

$movie_name= $_POST['movie_name'];


//error_log(print_r($movie_category, TRUE));


//include("init.php");
session_start();
$sql_connect=mysqli_connect('localhost','root','root','movie_store');

$query = "SELECT * FROM movies WHERE movie_flag=1 AND Name LIKE '%".$movie_name."%'" ;

$result=mysqli_query($sql_connect,$query);
$count = 0;


//error_log(print_r($result, TRUE));
$num_rows = mysqli_num_rows($result);

if ($num_rows>0){
while($row=$result->fetch_assoc())

{
    $count = $count + 1;
    $table_data[]= array("id"=>$row['Id'],"category" =>$row['Category'],"name"=>$row['Name'],"year"=>$row['Year'],"img"=>$row['Img_url'],"cost"=>$row['Cost']);
}

    echo json_encode($table_data);
}
else
{
    echo 0;
}


?>
