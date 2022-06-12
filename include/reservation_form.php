<?php
include_once 'dbh.inc.php';

$sql = "INSERT INTO reservation (id, room_num, date_checked_in, date_checked_out) VALUES (4, 102, '2014-06-08', '2014-06-11');";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();