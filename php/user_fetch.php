<?php
session_start();

if (isset($_SESSION['username'])) {
    $user_details = array("username" => $_SESSION['username'], "admin" => $_SESSION['admin']);
    echo json_encode($user_details);
}
else{
    echo null;
}

?>
