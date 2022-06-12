<?php
include_once 'include/dbh.inc.php';


$sql = "
SELECT
    room_num, roomtype
FROM
    room
WHERE
    room_num NOT IN (
        SELECT
            room.room_num
        FROM
            room
        LEFT OUTER JOIN
            reservation ON reservation.room_num = room.room_num
        WHERE (
                -- wished booking date is after or at the DOR date
                date_checked_in BETWEEN '2014-06-02' AND  '2014-06-07' OR 
                -- OR wished booking date is before the DCO date
                '2014-06-02' BETWEEN date_checked_in AND date_checked_out
            )
    )  ";

$result = mysqli_query($conn, $sql);
$available_rooms = [];

if ($result) {

    while ($row = mysqli_fetch_assoc($result)) {
        $type = $row['roomtype'];

        //echo "  <td>" . $type . "</td>";
        $available_rooms[] = $type;
    }
}


$deluxe = null;
$single = null;
$double_room = null;
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