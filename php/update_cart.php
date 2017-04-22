<?php

$movie_name = $_POST['movie_name'];
$user_name = $_POST['user_name'];
$action = $_POST['action'];


session_start();
// $flag = 1;

$sql_connect=mysqli_connect('localhost','root','root','movie_store');
if($action=='add'){
  $query = "SELECT * FROM cart WHERE movie_name='$user_name' AND '$movie_name'";
  $result = mysqli_query($sql_connect,$query);
  if(!$result){
    $query = "INSERT INTO cart VALUES ('$user_name', '$movie_name', 1)";
  }else{
    $query = "UPDATE cart SET flag=1 WHERE Username='$user_name' AND Name='$movie_name'" ;
  }
}else{
  $query = "UPDATE cart SET flag=0 WHERE Username='$user_name' AND Name='$movie_name'" ;
}
$result=mysqli_query($sql_connect,$query);
error_log(print_r($result, TRUE));

// session_start();
// $flag = 1;
//
// $sql_connect=mysqli_connect('localhost','root','root','movie_store');
// // $flag=1;
// if($action=='add'){
//   $query = "INSERT INTO cart VALUES ('$user_name', '$movie_name', '$flag')";
// }else{
//   $query = "UPDATE cart SET flag=0 WHERE Username='$user_name' AND Name='$movie_name'" ;
// }
// $result=mysqli_query($sql_connect,$query);
// error_log(print_r($result, TRUE));
?>
