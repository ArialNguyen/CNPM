<?php

include("../Connection.php");
session_start();
if (isset($_SESSION["admin"])) {
    $id = $_POST["id"];
    $update_fileUpload = $_POST["update_fileUpload"];
    $update_name = $_POST["update_name"];
    $update_name_scn = $_POST["update_name_scn"];
    $update_describe = $_POST["update_describe"];
    $update_where = $_POST["update_where"];
    $update_congDung = $_POST["update_congDung"];
    $sql = $conn->query("UPDATE caythuoc SET tenCayThuoc = '$update_name', tenKhoaHoc = '$update_name_scn', moTa = '$update_describe', noiTrong = '$update_where', congDung = '$update_congDung', image = '$update_fileUpload' WHERE id = '$id'");

    if ($sql === TRUE) {
        echo "Update Success!";
        exit();
    }
    echo "Update error!";
} else if (isset($_SESSION["userName"])) {
    echo "You not allow to access this file! Because you're a user";
} else {
    echo "You not allow to access this file! Because you not login!";
}
