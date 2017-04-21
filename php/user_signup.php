<?php
session_start();

$conn = mysqli_connect("localhost", "root", "root", "movie_store");
if (!conn)
{
	die("Connection Failed: " . mysqli_connect_error());
}

$fullname = $_POST['fullname'];
$username = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$md5password = md5($password);

if (!empty($fullname) && !empty($username) && !empty($email) && !empty($password))
{
	$sql = "INSERT INTO user (Name, Username, Password, Email) 
			values ('$fullname', '$username', '$md5password', '$email')";
	$result = mysqli_query($conn, $sql);
	if ($result)
	{
		header('Location: ../login_page.php');
	}
	else
	{
		header('Location: ../signup_page.php');
	}	
}

mysqli_close($conn);
?>