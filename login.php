<?php
session_start();
$_SESSION['user'] = 'akshay';
header('Location: http://localhost/index.html');
?>