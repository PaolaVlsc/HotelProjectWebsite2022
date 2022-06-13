<?php
include_once 'dbh.inc.php';

$room = null;

if(isset($_POST['save']))
{
    $room = htmlspecialchars($_POST['first_name']);
    //echo $room;

    $start_date = htmlspecialchars($_POST['start_date']);
    //echo $start_date;

    $end_date = htmlspecialchars($_POST['end_date']);
    //echo $end_date;


    $sql = "SELECT * from room where room_num not in ( SELECT
            room.room_num
        FROM
            room
        LEFT OUTER JOIN
            reservation ON reservation.room_num = room.room_num
        WHERE 
		roomtype != '".$room."'
            OR (
                date_checked_in BETWEEN '".$start_date."' AND  '".$end_date."' OR 
                '".$start_date."' BETWEEN date_checked_in AND date_checked_out
            )); ";

    //echo $sql;

    $result = mysqli_query($conn, $sql);

    if ($result) {

        $row = mysqli_fetch_assoc($result);
        $type = $row['room_num'];
        //echo $type;

        $_SESSION['roomNumber'] = $type;
        $_SESSION['startCheckIn'] = $start_date;
        $_SESSION['startCheckOut'] = $end_date;
    }
}


// $available_rooms = [];
//
//if ($result) {
//
//    while ($row = mysqli_fetch_assoc($result)) {
//        $type = $row['room_num'];
//
//        echo "  <td>" . $type . "</td>";
//        $available_rooms[] = $type;
//    }
//}


//
//$sql = "INSERT INTO reservation (room_num, date_checked_in, date_checked_out) VALUES ($type, '".$start_date."', '".$end_date."');";
//echo $sql;
//if ($conn->query($sql) === TRUE) {
//    echo "New record created successfully";
//} else {
//    echo "Error: " . $sql . "<br>" . $conn->error;
//}

