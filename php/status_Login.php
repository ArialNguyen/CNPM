<?php
session_start();
if (isset($_SESSION["userName"])) {
    echo $_SESSION["userName"];
}
else if(isset($_SESSION["admin"])){
    echo "admin";
}
else{
    echo "Not Login";
}

