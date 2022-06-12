<?php
include_once 'dbh.inc.php';

$room = null;

if(isset($_POST['save']))
{
    $room = htmlspecialchars($_POST['first_name']);
    echo $room;
}

$sql = "SELECT * from room where room_num not in ( SELECT
            room.room_num
        FROM
            room
        LEFT OUTER JOIN
            reservation ON reservation.room_num = room.room_num
        WHERE 
		roomtype != '".$room."'
            OR (
                -- wished booking date is after or at the DOR date
                date_checked_in BETWEEN '2014-05-19' AND  '2014-06-12' OR 
                -- OR wished booking date is before the DCO date
                '2014-05-19' BETWEEN date_checked_in AND date_checked_out
            )); ";

$result = mysqli_query($conn, $sql);
$available_rooms = [];

//if ($result) {
//
//    while ($row = mysqli_fetch_assoc($result)) {
//        $type = $row['room_num'];
//
//        echo "  <td>" . $type . "</td>";
//        $available_rooms[] = $type;
//    }
//}

if ($result) {

    $row = mysqli_fetch_assoc($result);
    $type = $row['room_num'];
    echo $type;

}
$sql = "INSERT INTO reservation (room_num, date_checked_in, date_checked_out) VALUES ($type, '2014-06-08', '2014-06-11');";
echo $sql;
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();