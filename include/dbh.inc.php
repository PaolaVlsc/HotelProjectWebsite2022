<?php

$serverName = "localhost";
$dbUserName = "elite_admin";
$dbPassword = "1234";
$dbName = "elite";

// create a connection
$conn = mysqli_connect($serverName, $dbUserName, $dbPassword, $dbName);

// if connection fails
if (mysqli_connect_errno()) {
    printf("Connection failed: %s\n", mysqli_connect_error);
    exit();
}