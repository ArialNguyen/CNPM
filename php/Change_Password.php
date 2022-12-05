<?php
session_start();
include("Connection.php");
if (isset($_SESSION["userName"])) {
    $pass = $_POST["pass"];
    $user = $_SESSION["userName"];
    if($conn -> query("UPDATE user SET password = '$pass' WHERE userName = '$user'") === TRUE){
        echo "Change Password success!";
    }else{
        echo "Change Password error!";
    }
}
else if(isset($_SESSION["admin"])){
    echo "fucntion of user! you don't need to access it!";
}
else{
    echo "Not Login";
}

