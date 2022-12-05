<?php
include("../Connection.php");
error_reporting(0);
session_start();
if (isset($_SESSION["userName"])) {
    $user = $_SESSION["userName"];
    $result = $conn->query("SELECT listCayThuoc FROM basket WHERE userName = '$user'");
    if (mysqli_num_rows($result) > 0) {
        echo mysqli_fetch_assoc($result)["listCayThuoc"];
    } else {
        echo "Null";
    }
} else if (isset($_SESSION["admin"])) {
    echo "fucntion of user! you don't need to access it!";
} else {
    echo "You need to Login to add it!";
}
