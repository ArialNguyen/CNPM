<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
error_reporting(0);
session_start();
include("Connection.php");
if (empty($_POST["userName"]) || empty($_POST["Password"]) || empty($_POST["Email"])) {
    echo "Chua nhap thong tin";
    exit();
}
$user = $_POST["userName"];
$pass = $_POST["Password"];
$email = $_POST["Email"];
if ($user == 'admin') {
    echo "Username already Exists!";
    exit();
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Email khong hop le";
    exit();
}

$result =  $conn->query("Select * from user where userName = '$user' OR email = '$email'");

if (mysqli_num_rows($result) == 0) {
    $hash = md5($pass);
    $sql = "INSERT INTO user(userName,password,email,hash,active) VALUES('$user', '$pass', '$email', '$hash','0')";
    if ($conn->query($sql) === TRUE) {
        $mail = new PHPMailer(true);
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER; // Enable verbose debug output
        $mail->isSMTP(); // gửi mail SMTP
        $mail->CharSet = 'UTF-8';
        $mail->Host = 'smtp.gmail.com'; // Set the SMTP server to send through
        $mail->SMTPAuth = true; // Enable SMTP authentication
        $mail->Username = 'web.hungnguyen100802@gmail.com'; // SMTP username
        $mail->Password = 'cqrttkdzrmkwebno';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        $mail->From = "web.hungnguyen100802@gmail.com";
        $mail->FromName = "WebSite Cây Thuốc Đông y";

        $mail->addAddress($email);

        $mail->isHTML(true);   // Set email format to HTML
        $mail->Subject = 'Signup | Verification';
        $mail->Body = '
        Thanks for signing up! <br>
        Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below. <br>
        <br>
        ------------------------<br>
        Username: ' . $user . '<br>
        Password: ' . $pass . '<br>
        ------------------------<br>
        <br>
        Please click this link to activate your account:
        http://localhost/SourceCode-cnpm/php/verify.php?email=' . $email . '&hash=' . $hash . '
        ';
        try {
            $mail->send();
            echo "Message has been sent successfully";
        } catch (Exception $e) {
            echo "Mailer Error: " . $mail->ErrorInfo;
        }
        exit();
    }
    echo "Insert error";
    exit();
}
echo "Tai khoan bi trung";
