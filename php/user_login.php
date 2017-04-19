<?php
session_start();

$conn = mysqli_connect("localhost", "root", "root", "movie_store");
if (!conn)
{
	die("Connection Failed: " . mysqli_connect_error());
}

$username = $_POST['loginusername'];
$password = md5($_POST['loginpassword']);

if (!empty($username) && !empty($password))
{
	$sql = "SELECT * FROM user WHERE Username = '$username'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	$dbpassword = $row['password'];
	$dbusername = $row['Username'];
	if (($password == $dbpassword) && ($username == $dbusername))
	{
		$_SESSION['user'] = $dbusername;
		header('Location: http://localhost/index.html');
	}
	else
	{
		if ($username != $dbusername)
		{
			$message = "Username did not Match";
			echo "<script type='text/javascript'>
					alert('$message');
					window.location.href = '../user_login.html';
				</script>";
		}
		else if ($password != $dbpassword)
		{
			$message = "Password is incorrect";
			echo "<script type='text/javascript'>
					alert('$message');
					window.location.href = '../user_login.html';
				</script>";
		}
	}
}
else
{
	$message = "Enter both Fields to Login.";
	echo "<script type='text/javascript'>
			alert('$message');
			window.location.href = '../user_login.html';
		</script>";
}

mysqli_close($conn);
?>