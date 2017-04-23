<?php
session_start();

$conn = mysqli_connect("localhost", "root", "root", "movie_store");
if (!$conn)
{
    die("Connection Failed: " . mysqli_connect_error());
}

$username = $_POST['loginusername'];
$password = md5($_POST['loginpassword']);

if (empty($_POST['loginusername']) && empty($_POST['loginpassword']))
{
    $_SESSION['message'] = "";
    header ('Location: http://localhost/php/login.php');
}
else if (empty($_POST['loginusername']))
{
    $_SESSION['message'] = "Enter Username";
    header ('Location: http://localhost/php/login.php');
}
else if (empty($_POST['loginpassword']))
{
    $_SESSION['message'] = "Enter Password";
    header ('Location: http://localhost/php/login.php');
}
else
{
    $sql = "SELECT * FROM user WHERE Username = '$username'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $dbpassword = $row['Password'];
    $dbusername = $row['Username'];
    $dbfullname = $row['Name'];
    $dbIsAdmin = $row['IsAdmin'];
    if (($password == $dbpassword) && ($username == $dbusername))
    {
        $_SESSION['username'] = $dbusername;
        $_SESSION['fullname'] = $dbfullname;
        if($dbIsAdmin == 1)
          $_SESSION['admin'] = 'true';
        else
          $_SESSION['admin'] = 'false';

        header('Location: ../index.php');
    }
    else
    {
        if ($username != $dbusername && $password != $dbpassword)
        {
            $_SESSION['message'] = "Username is incorrect";
            header ('Location: http://localhost/php/login.php');
        }
        else
        {
            $_SESSION['message'] = "Password is incorrect";
            header ('Location: http://localhost/php/login.php');
        }
    }
}


mysqli_close($conn);
?>
