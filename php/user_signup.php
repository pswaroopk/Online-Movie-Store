<?php
session_start();

$conn = mysqli_connect("localhost", "root", "root", "movie_store");
if (!conn)
{
	die("Connection Failed: " . mysqli_connect_error());
}

$username = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$md5password = md5($password);

if (!empty($username) && !empty($email) && !empty($password))
{
	$sql = "INSERT INTO user (Username, email, password) values ('$username', '$email', '$md5password')";
	$result = mysqli_query($conn, $sql);
	if ($result)
	{
		$_SESSION['signupsuccess'] = "<strong>Sign Up Sucessful. Login to the Movie Store</strong>";
		header('Location: /user_login.html');
	}
	else
	{
		echo "Sign Up Fail!";
	}	
}

mysqli_close($conn);
?>