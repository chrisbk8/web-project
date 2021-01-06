<?php

include("connection.php");
session_start();

$email = $_POST["email"];
$password = $_POST["password"];
$hash = password_hash($password, PASSWORD_DEFAULT);

$sql = "SELECT name,email, password FROM users WHERE email = '$email' AND password = '$hash'";
$query = mysqli_query($con, $sql);

if (!password_verify($password, $hash)) {
    echo 'Invalid password.';
    exit;
}
else {
    header("Location:home.php");

    $_SESSION["name"] = $email;
}


