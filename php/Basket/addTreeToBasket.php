<?php
include("../Connection.php");
error_reporting(0);
session_start();
if (isset($_SESSION["userName"])) {
    $id_tree = $_POST["id_tree"];
    $user = $_SESSION["userName"];
    if (mysqli_num_rows($conn->query("SELECT * FROM basket WHERE userName = '$user'")) > 0) {
        // User khong phai lan dau them
        $listCayThuoc = mysqli_fetch_assoc($conn->query("SELECT listCayThuoc FROM basket WHERE userName = '$user'"))["listCayThuoc"];
        if(strpos($listCayThuoc, $id_tree) !== false ){
            echo "Items Already in Basket!";
            exit();
        }
        $listCayThuoc .= "," . $id_tree;
        if ($conn->query("UPDATE basket SET listCayThuoc = '$listCayThuoc' WHERE userName = '$user'") === TRUE) {
            echo "Add Success";
        } else {
            echo "Error for n Add";
        }
    } else {
        // User lan dau them
        if ($conn->query("INSERT INTO basket(userName,listCayThuoc) VALUES('$user','$id_tree')") === TRUE) {
            echo "First Add Success!";
        } else {
            echo "Error for First Add";
        }
    }
} else if (isset($_SESSION["admin"])) {
    echo "fucntion of user! you don't need to access it!";
} else {
    echo "You need to Login to add it!";
}
