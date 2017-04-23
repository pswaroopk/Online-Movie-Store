<?php
session_start();
  $user_name = $_SESSION['username'];
//  $user_name = 'swaroop';//temporary hardcode

  if (isset($_GET['action'])) {
      switch ($_GET['action']) {
          case 'fetch':
              fetchMoviesX();
              break;
          default:
              fetchMovies();
              break;
      }
  }
  function fetchMovies(){
    global $user_name;
    $sql_connect=mysqli_connect('localhost','root','root','movie_store');
    //SELECT * FROM cart INNER JOIN movies WHERE cart.Username='swaroop' and movies.Name=cart.Name

    $query = "SELECT movies.Name, Cost, Img_url FROM cart INNER JOIN movies ON movies.Name=cart.Name WHERE cart.Username='$user_name' AND cart.flag=1";
    $result=mysqli_query($sql_connect,$query);
    // echo $query;
    while($row=$result->fetch_assoc()){
        $table_data[]= $row;
     }
    $jdata = json_encode($table_data);

    return $jdata;
    // exit;
  }

  function fetchMoviesX(){
    $user_name = 'swaroop';
    $sql_connect=mysqli_connect('localhost','root','root','movie_store');
    //SELECT * FROM cart INNER JOIN movies WHERE cart.Username='swaroop' and movies.Name=cart.Name

    $query = "SELECT movies.Name, Cost, Img_url FROM cart INNER JOIN movies ON movies.Name=cart.Name WHERE cart.Username='$user_name' AND cart.flag=1";
    $result=mysqli_query($sql_connect,$query);
    // echo $query;
    while($row=$result->fetch_assoc()){
        $table_data[]= $row;
     }
    $jdata = json_encode($table_data);

    echo $jdata;
    // exit;
  }
 ?>
