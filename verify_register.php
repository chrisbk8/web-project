<?php

include("connection.php");

$name = $_POST["name"];
$email = $_POST["email"];
$password = password_hash($_POST["password"],PASSWORD_DEFAULT);

$sql = "INSERT INTO users (name,email,password) VALUES ('$name','$email','$password')";

if ($con->query($sql) === TRUE) {
    header("Location:login.php");
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}