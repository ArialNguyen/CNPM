<?php
include("../Connection.php");
$name = $_POST["search"];
$sql = "SELECT * FROM caythuoc Where tenCayThuoc LIKE '%$name%'";
$result = $conn->query($sql);
if (mysqli_num_rows($result) > 0) {
    $rows =  mysqli_fetch_all($result);
    echo json_encode($rows, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
} else {
    echo "Medician Tree not found!";
}
