<?php
  session_start();
  $user_name = $_SESSION['username'];

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
    $query = "SELECT movies.Name, Cost, Img_url FROM cart INNER JOIN movies ON movies.Name=cart.Name WHERE cart.Username='$user_name' AND cart.flag=1 AND movies.movie_flag = 1";
    $result=mysqli_query($sql_connect,$query);
    while($row=$result->fetch_assoc()){
        $table_data[]= $row;
     }
    $jdata = json_encode($table_data);
    return $jdata;
  }


  function fetchMoviesX(){
    global $user_name;
    $sql_connect=mysqli_connect('localhost','root','root','movie_store');
    $query = "SELECT movies.Name, Cost, Img_url FROM cart INNER JOIN movies ON movies.Name=cart.Name WHERE cart.Username='$user_name' AND cart.flag=1 AND movies.movie_flag = 1";
    $result=mysqli_query($sql_connect,$query);
    while($row=$result->fetch_assoc()){
        $table_data[]= $row;
     }
    $jdata = json_encode($table_data);
    echo $jdata;
  }
 ?>
