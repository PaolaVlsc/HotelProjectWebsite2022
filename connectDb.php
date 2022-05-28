<?php
$servername = "localhost";
$username = "uniwa";
$password = "1234";
$dbname = "elite";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else
    echo "OK";

?>