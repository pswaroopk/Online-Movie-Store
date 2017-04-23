<?php
session_start();

if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    $admin = $_SESSION['admin'];
    $user_details = array("username" => $username,
                            "admin" => $admin);
    //$user_details[] = array("username" => 'swaroopark', "admin" => 'true');
    echo json_encode($user_details);
    // echo $_SESSION['username'];
    // echo $_SESSION['admin'];
}
else{
    echo null;
}

?>
