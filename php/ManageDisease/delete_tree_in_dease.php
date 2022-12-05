<?php

include("../Connection.php");
session_start();
if (isset($_SESSION["admin"])) {
    $id_benh = $_GET["id_benh"];
    $id_cay = $_GET["id_cay"];
    $sql = $conn->query("SELECT listCayThuoc FROM benh WHERE id = '$id_benh'");
    $result = mysqli_fetch_assoc($sql)["listCayThuoc"];
    if(strlen($result) == 1){
        $result = "";
    }else if(strpos($result,$id_cay) == 0){
        $result = str_replace($id_cay . ",", "", $result);
    }else if(strpos($result,$id_cay) == strlen($result) - 1){
        $result = str_replace("," . $id_cay, "", $result);
    }else{
        $result = str_replace("," . $id_cay, "", $result);
    }
    $sql = $conn->query("UPDATE benh SET listCayThuoc = '$result' WHERE id = '$id_benh'");
    if ($sql === TRUE) {
        echo "Update Success!";
        header("Location: one_sick_details.php?id=" . $id_benh);
        exit();
    }
    echo "Update error!";
} else if (isset($_SESSION["userName"])) {
    echo "You not allow to access this file! Because you're a user";
} else {
    echo "You not allow to access this file! Because you not login!";
}
