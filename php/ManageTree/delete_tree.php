<?php
    include("../Connection.php");
    session_start();
    if (isset($_SESSION["admin"])) {
        $id = $_POST["id"];
        $name = $_POST["name"];
        if($conn->query("DELETE FROM caythuoc WHERE id = '$id'") == TRUE){
            echo "DELETE " . $name . " Success!";
            exit();
        }
        echo "Error for delete " . $name;
    } else if (isset($_SESSION["userName"])) {
        echo "You not allow to access this file! Because you're a user";
    } else {
        echo "You not allow to access this file! Because you not login!";
    }
?>