<?php
include("../Connection.php");

$sql = $conn->query("SELECT * FROM benh");
if (mysqli_num_rows($sql) > 0) {
    $rows = mysqli_fetch_all($sql);
    echo json_encode($rows, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
}
