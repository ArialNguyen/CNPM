<?php
    include("Connection.php");
    if(isset($_GET["email"]) && !empty($_GET["email"]) && isset($_GET["hash"]) && !empty($_GET["hash"]) ){
        $email = $_GET["email"];
        $hash = $_GET["hash"];
        $sql = "SELECT * FROM user Where email = '$email' AND hash = '$hash'";
        if(mysqli_num_rows($conn -> query($sql)) > 0){
            $conn -> query("Update user SET active = 1 where email='$email'");
            echo "<h1>Active success! <a href ='../Index.html'>Please click here to Login</a></h1>";
            exit();
        }
        echo "Something Error here! Please Send me error.";
        exit();
    }
    echo "Permisson Denied!";
