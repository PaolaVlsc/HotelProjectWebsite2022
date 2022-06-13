<?php
include_once 'include/dbh.inc.php';
if (!isset($_SESSION['username'])) {
    echo "<h1>DENIED ACCESS</h1>";
    exit();
} else {
    echo "WELCOME";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Αρχική</title>

    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- σύνδεση με τη css   -->
    <link rel="stylesheet" href="css/displayMessages.css">
</head>

<body>
<div class="table-container" >
    <h1 class="heading">Ιστορικό Κρατήσεων</h1>
    <table class="table" >
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Room No.</th>
            <th scope="col">Room Type</th>
            <th scope="col">Date check in</th>
            <th scope="col">Date check out</th>
            <th scope="col">Name</th>
            <th scope="col">Surname</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $sql = "SELECT 
reservation.id AS id , 
reservation.room_num AS room_num, 
room.roomtype AS room_type, 
reservation.date_checked_in AS date_checked_in, 
reservation.date_checked_out AS date_checked_out,
reservation.name AS name,
reservation.surname AS surname,
reservation.email AS email,
reservation.phone AS phone
FROM reservation
LEFT JOIN room ON  reservation.room_num = room.room_num;";
        $result = mysqli_query($conn, $sql);
        if ($result) {

            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $room_num = $row['room_num'];
                $room_type = $row['room_type'];
                $date_checked_in = $row['date_checked_in'];
                $date_checked_out = $row['date_checked_out'];
                $name = $row['name'];
                $surname = $row['surname'];
                $email = $row['email'];
                $phone = $row['phone'];

                echo "<tr><td>" . $id . "</td>
                              <td>" . $room_num . "</td>
                              <td>" . $room_type . "</td>
                              <td>" . $date_checked_in . "</td>
                              <td>" . $date_checked_out . "</td>
                              <td>" . $name . "</td>
                              <td>" . $surname . "</td>
                              <td>" . $email . "</td>
                              <td>" . $phone . "</td></tr>";

            }
        }
        ?>

        </tbody>
    </table>

</div>