<?php
include("../Connection.php");
if (isset($_POST["name"])) {
    $name = $_POST["name"];
    $sql = "SELECT * FROM caythuoc Where tenCayThuoc = '$name'";
    $result = $conn->query($sql);
    if (mysqli_num_rows($result) > 0) {
        $rows =  mysqli_fetch_all($result);
        echo json_encode($rows, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    } else {
        echo "Medician Tree not found!";
    }
} else if ($_POST["id"]) {
    $id = $_POST["id"];
    $sql = "SELECT * FROM caythuoc Where id = '$id'";
    $result = $conn->query($sql);
    if (mysqli_num_rows($result) > 0) {
        $rows =  mysqli_fetch_row($result);
        echo json_encode($rows, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    } else {
        echo "Medician Tree not found!";
    }
}
