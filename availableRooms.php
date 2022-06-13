<?php
include_once 'getDate.php';


//if(isset($_POST['formDate']))
//{
//    echo "OKAY";
//
//    $start_date = date('Y-m-d', strtotime($_POST['checkin-date']));
//    $end_date = date('Y-m-d', strtotime($_POST['checkout-date']));
//
//
//    echo $start_date;
//    echo $end_date;
//}

$sql = "SELECT * from room where room_num not in ( SELECT
            room.room_num
        FROM
            room
        LEFT OUTER JOIN
            reservation ON reservation.room_num = room.room_num
        WHERE (
                -- wished booking date is after or at the DOR date
                date_checked_in BETWEEN '2022-06-14' AND  '2022-06-18' OR 
                -- OR wished booking date is before the DCO date
                '2022-06-14' BETWEEN date_checked_in AND date_checked_out
            ));";

//echo $sql;
$result = mysqli_query($conn, $sql);
$available_rooms = [];

if ($result) {

    while ($row = mysqli_fetch_assoc($result)) {
        $type = $row['roomtype'];

        echo "  <td>" . $type . "</td>";
        $available_rooms[] = $type;
    }
}


$deluxe = false;
$single = false;
$double_room = false;
foreach ($available_rooms as $value) {
    if ($value == 'Single')
    {
        $single = true;
    }

    if ($value == 'Deluxe')
    {
        $double_room = true;
    }

    if ($value == 'Superior')
    {
        $deluxe = true;
    }
}

//if($single === true)
//{
//    echo "Single";
//}
//
//if($double_room === true)
//{
//    echo "Double room";
//}
//
//if($deluxe === true)
//{
//    echo "DELUXE";
//}