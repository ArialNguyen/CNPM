<?php
include("../Connection.php");
$name = $_POST["name"];
$sql = "SELECT * FROM benh Where tenBenh = '$name'";
$result = $conn->query($sql);
if (mysqli_num_rows($result) > 0) {
    $rows =  mysqli_fetch_all($result);
    echo json_encode($rows, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
} else {
    echo "Medician Tree not found!";
}