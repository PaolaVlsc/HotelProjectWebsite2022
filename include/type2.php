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
require_once 'type1.php';
?>

<div class="contact-section">
    <h1>Στοιχεία κράτησης</h1>
    <div class="border"></div>
    <form class="contact-form" action="" method="POST" name="insert">
        <input type="text" class="contact-form-text" placeholder="'Ονομα" name="name" id="name" required>
        <input type="text" class="contact-form-text" placeholder="Επώνυμο" name="surname" id="surname" required>
        <input type="email" class="contact-form-text" placeholder="E-mail" name="email">
        <input type="text" class="contact-form-text" placeholder="Phone" name="phone" required>
        <input type="submit" class="contact-form-btn" name="submit" value="Αποστολή">
        <span></span>
    </form>
</div>

<?php
if (isset($_POST['submit'])) {

    if (isset($_SESSION['roomNumber'])) {
        $roomNumber = $_SESSION['roomNumber'];
        $checkInDate = $_SESSION['startCheckIn'];
        $checkOutDate = $_SESSION['startCheckOut'];

        $name =  $_POST['name'];
        $surname =  $_POST['surname'];
        $email =  $_POST['email'];
        $phone =  $_POST['phone'];

        $sql = "INSERT INTO reservation (room_num, date_checked_in, date_checked_out, name, surname, email, phone) VALUES ($roomNumber, '".$checkInDate."', '".$checkOutDate."', '".$name."', '".$surname."', '".$email."', '".$phone."');";
        echo $sql;
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
            $_SESSION['status'] = "Reservation Completed";
            header("location: ../index.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}
$conn->close();
?>

