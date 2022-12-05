<?php
session_start();
include("Connection.php");

// check admin or user
$name =  $_POST['userName'];
$pass =  $_POST['PassWord'];
$sql_result =  $conn->query("SELECT userName From user where userName = '$name'") ;
if ( mysqli_num_rows($sql_result ) > 0) {
    // if sql true -> user account
    if(mysqli_num_rows($conn->query("SELECT userName From user where active = 0 and userName = '$name'")) > 0){
        echo "This account didn't active yet! Please verify account on your email.";
        exit();
    }
    $result = $conn->query("Select password from user where userName = '$name' and password = '$pass'");
    if (mysqli_num_rows($result) > 0) {
        $_SESSION["userName"] = $name;
        echo "Login Success";
        exit();
    }
    echo "Nhap sai mat khau";
    exit();
}

//$_SESSION["userName"] = $userName;
// if sql false -> 2 case happen. 1: account doesn't exists, 2: its may be is a admin
if ($name == 'admin') {
    $result = $conn->query("SELECT userName from admin where userName = '$name' AND password = '$pass'");
    if ( mysqli_num_rows($result) > 0) {
        $_SESSION["admin"] = $name;
        echo "Login Success";
        exit();
    }
}
echo    "Account doesn't exists.
Please create an account!";
