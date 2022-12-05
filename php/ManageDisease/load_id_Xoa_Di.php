<?php
    include("../Connection.php");
    session_start();
    if(isset($_SESSION["admin"])){
        $ls = array();
        
        $sql = $conn -> query( "SELECT * FROM benh");
        if(mysqli_num_rows($sql) > 0){
            $rows = mysqli_fetch_all($sql);
            echo json_encode($rows, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        }
    }
    else if (isset($_SESSION["userName"])){
        echo "You not allow to access this file! Because you're a user";
    }
    else{
        echo "You not allow to access this file! Because you not login!";
    }
?>