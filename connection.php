<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "shoes";

$con = new mysqli($server,$username,$password,$database);

// Check connection
if ($con -> connect_errno) {
    echo "Failed to connect to MySQL: " . $con -> connect_error;
    exit();
}