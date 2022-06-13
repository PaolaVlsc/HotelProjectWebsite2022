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
<div class="table-container">
    <h1 class="heading">Μηνύματα</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Surname</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Message</th>
        </tr>
        </thead>
        <tbody>
                <?php
                $sql = "SELECT * FROM contact_data";
                $result = mysqli_query($conn, $sql);
                if ($result) {

                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $surname = $row['surname'];
                        $email = $row['email'];
                        $phone = $row['phone'];
                        $message = $row['message'];

                        echo "  <td>" . $id . "</td>
                              <td>" . $name . "</td>
                              <td>" . $surname . "</td>
                              <td>" . $email . "</td>
                              <td>" . $phone . "</td>
                              <td><button  class='btn'><a href=\"include/view.inc.php?viewid=" . $id . "\" >View</a></button></td>  ";

                    }
                }
                ?>
<!--        <tr>-->
<!--            <td data-label="id">1</td>-->
<!--            <td data-label="name">Paola</td>-->
<!--            <td data-label="surname">Velasco</td>-->
<!--            <td data-label="email">paola@uniwa.gr</td>-->
<!--            <td data-label="phone">6936000000</td>-->
<!--            <td data-label="message"><a href="#" class="btn">View</a></td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td data-label="id">1</td>-->
<!--            <td data-label="name">Paola</td>-->
<!--            <td data-label="surname">Velasco</td>-->
<!--            <td data-label="email">paola@uniwa.gr</td>-->
<!--            <td data-label="phone">6936000000</td>-->
<!--            <td data-label="message"><a href="#" class="btn">View</a></td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td data-label="id">1</td>-->
<!--            <td data-label="name">Paola</td>-->
<!--            <td data-label="surname">Velasco</td>-->
<!--            <td data-label="email">paola@uniwa.gr</td>-->
<!--            <td data-label="phone">6936000000</td>-->
<!--            <td data-label="message"><a href="#" class="btn">View</a></td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td data-label="id">1</td>-->
<!--            <td data-label="name">Paola</td>-->
<!--            <td data-label="surname">Velasco</td>-->
<!--            <td data-label="email">paola@uniwa.gr</td>-->
<!--            <td data-label="phone">6936000000</td>-->
<!--            <td data-label="message"><a href="#" class="btn">View</a></td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td data-label="id">1</td>-->
<!--            <td data-label="name">Paola</td>-->
<!--            <td data-label="surname">Velasco</td>-->
<!--            <td data-label="email">paola@uniwa.gr</td>-->
<!--            <td data-label="phone">6936000000</td>-->
<!--            <td data-label="message">-->
<!--                <button class = "btn btn-primary" onclick="loadData(this.getAttribute('data-id'));" data-id="--><?php //echo "$row['id']"; ?><!--">-->
<!--                    Details-->
<!--                </button>-->
<!--            </td>-->
<!--        </tr>-->
        </tbody>
    </table>
</div>