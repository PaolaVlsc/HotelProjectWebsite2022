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
}

$sql = "INSERT INTO contact_data values ('PAola','Velasco','e@s','23232320','232323232dsdsd')";
extract($_POST);
$sql = "INSERT INTO contact_data values ('".$name."', '".$surname."', '".$email."', '".$phone."', '".$message."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>