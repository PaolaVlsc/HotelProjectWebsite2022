<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Αρχική</title>

    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- σύνδεση με τη css   -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/booking.css">
    <link rel="stylesheet" href="../css/rooms.css">
    <link rel="stylesheet" href="../css/contact.css">
</head>
<body>

<!-- TODO 1 . HEADER start -->
<?php include '../header.php'; ?>
<!-- HEADER end -->

<?php
include_once 'dbh.inc.php';

$room = null;

if(isset($_POST['save']))
{
    $room = htmlspecialchars($_POST['first_name']);
    echo $room;

    $start_date = htmlspecialchars($_POST['start_date']);
    echo $start_date;

    $end_date = htmlspecialchars($_POST['end_date']);
    echo $end_date;


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
                date_checked_in BETWEEN '".$start_date."' AND  '".$end_date."' OR 
                '".$start_date."' BETWEEN date_checked_in AND date_checked_out
            )); ";

echo $sql;

$result = mysqli_query($conn, $sql);
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

if ($result) {

    $row = mysqli_fetch_assoc($result);
    $type = $row['room_num'];
    echo $type;

}

$sql = "INSERT INTO reservation (room_num, date_checked_in, date_checked_out) VALUES ($type, '".$start_date."', '".$end_date."');";
echo $sql;
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close(); ?>

<!--<div class="contact-section">-->
<!--    <h1>Στοιχεία κράτησης</h1>-->
<!--    <div class="border"></div>-->
<!--    <form class="contact-form" action="#" method="POST" name="insert">-->
<!--        <input type="text" class="contact-form-text" placeholder="'Ονομα" name="name" id="name" required>-->
<!--        <input type="text" class="contact-form-text" placeholder="Επώνυμο" name="surname" id="surname" required>-->
<!--        <input type="email" class="contact-form-text" placeholder="E-mail" name="email"  >-->
<!--        <input type="text" class="contact-form-text" placeholder="Phone" name="phone" required>-->
<!--        <input type="submit" class="contact-form-btn" name="submit" value="Αποστολή">-->
<!--        <span></span>-->
<!--    </form>-->
<!--</div>-->