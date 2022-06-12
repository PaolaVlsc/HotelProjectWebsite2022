<?php
include_once 'include/dbh.inc.php';


$sql = "SELECT distinct roomtype
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
    ) ";

$result = mysqli_query($conn, $sql);
//$available_rooms=[];

if ($result) {

    while ($row = mysqli_fetch_assoc($result)) {
        $type = $row['roomtype'];

        echo "  <td>" . $type . "</td>";
       // $available_rooms[] = $type;
    }
}

//while ($available_rooms) {
//    print_r($available_rooms);
//}

