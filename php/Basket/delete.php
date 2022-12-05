<?php
include("../Connection.php");
error_reporting(0);
session_start();
if (isset($_SESSION["userName"])) {
    $id_tree = $_POST["id"];
    $user = $_SESSION["userName"];
    $result = $conn->query("SELECT listCayThuoc FROM basket WHERE userName = '$user'");
    if (mysqli_num_rows($result) > 0) {
        $listCay = mysqli_fetch_assoc($result)["listCayThuoc"];
        if (strlen($listCay) == 1) {
            $listCay = "";
        } else if (strpos($listCay, $id_tree) == 0) {
            $listCay = str_replace($id_tree . ",", "", $listCay);
        } else{
            $listCay = str_replace("," . $id_tree, "", $listCay);
        }
        if($conn -> query("UPDATE basket SET listCayThuoc = '$listCay' WHERE userName = '$user'")){
            echo "Delete Tree From basket Success!";
        }
    }
} else if (isset($_SESSION["admin"])) {
    echo "fucntion of user! you don't need to access it!";
} else {
    echo "You need to Login to add it!";
}
