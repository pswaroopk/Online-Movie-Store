<?php
session_start();

$conn = mysqli_connect("localhost", "root", "root", "movie_store");
if (!conn)
{
	die("Connection Failed: " . mysqli_connect_error());
}

$username = $_POST['loginusername'];
$password = md5($_POST['loginpassword']);

if (!empty($_POST['loginusername']) && !empty($_POST['loginpassword']))
{
	$sql = "SELECT * FROM user WHERE Username = '$username'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	$dbpassword = $row['Password'];
	$dbusername = $row['Username'];
	if (($password == $dbpassword) && ($username == $dbusername))
	{
		$_SESSION['user'] = $dbusername;
		header('Location: ../index.html');
	}
	else
	{
		if ($username != $dbusername && $password != $dbpassword)
		{
			$_SESSION['message'] = "Both the fields are incorrect.";
			header ('Location: ../login_page.php');
		}
		else if ($password != $dbpassword)
		{
			$_SESSION['message'] = "Password is incorrect";
			header ('Location: ../login_page.php');
		}
		else
		{
			$_SESSION['message'] = "Username is incorrect";
			header ('Location: ../login_page.php');
		}
	}
}
else
{
	$_SESSION['message'] = "Enter both Fields to Login.";
	header ('Location: ../login_page.php');
}

mysqli_close($conn);
?>