<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "airport";

$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_errno) :
    echo "Database Connection Failed: " . $conn->connect_error;
    exit();
endif;