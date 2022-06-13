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
    <link rel="stylesheet" href="css/style.css">

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css">

</head>
<body>

<?php include 'header.php'; ?>

<?php
if(isset($_POST['formDate']))
{
    echo "hello";
    echo "<h1></h1>";
}
?>

<div class="book">
    <form name="book" class="book-form"  action="" onsubmit="return validateDate()" method="POST">
        <div class="form-item">
            <label for="checkin-date">Check In Date: </label>
            <input type="date" id="checkin-date" name="checkin-date">
        </div>
        <div class="form-item">
            <label for="checkout-date">Check Out Date: </label>
            <input type="date" id="checkout-date" name="checkout-date">
        </div>
        <div class="form-item">
            <input type="submit" class="btn" name="formDate" value="Book Now">
        </div>
    </form>
</div>

<!-- TODO 4. Footer start -->
<?php include 'footer.php'; ?>
<!-- Footer end -->



<!-- σύνδεση με τη javascript   -->
<script src="js/date.js"></script>


</body>
</html>