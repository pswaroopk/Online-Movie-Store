<?php
session_start();

$conn = mysqli_connect("localhost", "root", "root", "movie_store");
if (!conn)
{
	die("Connection Failed: " . mysqli_connect_error());
}

if (isset($_POST['user_name']))
{
	$username = $_POST['user_name'];
	$sql = "SELECT Username FROM user WHERE Username = '$username'";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0)
	{
		echo "Username already exists";
	}
	else
	{
		echo "OK";
	}
	exit();
}
mysqli_close($conn);
?>