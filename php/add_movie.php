<?php
session_start();

$image = $_FILES['image']['name'];
$moviename = $_POST['movieName'];
$category = $_POST['category'];
$year = $_POST['year'];
$cost = $_POST['cost'];
$description = $_POST['movie_description'];
$movieflag = 1;
// $target_dir = "C:/MAMP/htdocs/images/";
$target_dir = "../images/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);


if (!empty($moviename) && !empty($category) && !empty($image) && !empty($year) && !empty($cost) && !empty($description)){
  $check = getimagesize($_FILES["image"]["tmp_name"]);
  if ($check !== FALSE) {
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file))    {
      $conn = mysqli_connect("localhost", "root", "root", "movie_store");
      if (!$conn){
        die("Connection Failed: " . mysqli_connect_error());
      }
      $query = "SELECT * FROM movies WHERE Name='$moviename' AND movie_flag=1 ";
      $res = mysqli_query($conn, $query);
      $num_rows = mysqli_num_rows($res);
      if($num_rows > 0 ){
        $row = $res->fetch_assoc();
        if($row['movie_flag'] == 0)
          $sql = "UPDATE movies SET movie_flag=1 WHERE Name='$moviename'";
        else
          $sql = "UPDATE movies SET Category='$category', Img_url='$image', Year='$year', Cost='$cost', Description='$description'
                  WHERE Name='$moviename'";
      }
      else
        $sql = "INSERT INTO `movies` (`Name`, `Category`, `Img_url`, `Year`, `Cost`, `Description`, `movie_flag`) VALUES
                  ('$moviename', '$category', '$image', '$year', '$cost', '$description', '$movieflag')";
      $result = mysqli_query($conn, $sql);
      if ($result){
        //echo "Successfully movie added to database.";
        header ('Location: http://localhost/index.php');
      }
    }
  }
  else {
    echo "Image not uploaded correctly.";
  }
}
else {
  $message = "All the input fields must be entered.";
  echo "<script type='text/javascript'>
			alert('$message');
			window.location.href = '../admin.html';
		</script>";
}
?>
