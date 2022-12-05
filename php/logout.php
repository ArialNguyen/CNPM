<?php
session_start();
if (isset($_SESSION["userName"])) {
    unset($_SESSION['userName']);
    header("Location: ../Index.html");
}
else if(isset($_SESSION["admin"])){
    unset($_SESSION['admin']);
    header("Location: ../Index.html");
}
