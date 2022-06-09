<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Δωμάτια</title>
    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- σύνδεση με τη css   -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/rooms.css">

</head>
<body>

<!-- TODO 1. HEADER start -->
<section class="header">
    <div class="logo">
        ELITE
    </div>
    <!-- TODO 2. navigation bar -->
    <nav class="navbar">
        <a href="index.php">Αρχική</a>
        <a href="rooms.html" class="active">Δωμάτια</a>
        <a href="booking.php">Κράτηση</a>
        <a href="contact.php">Επικοινωνία</a>
    </nav>
    <!-- navigation bar end -->

    <!-- TODO 3. menu button (responsive)-->
    <div id="menu-btn" class="fas fa-bars"></div>
    <!--  menu button (responsive) end-->

</section>
<!-- HEADER end -->

<!-- TODO 5. Rooms-->
<div class="heading" style="background:url(images/header-bg-1.png) no-repeat">
    <h1>ΔΩΜΑΤΙΑ ΤΟΥ ELITE</h1>
</div>

<section class="rooms sec-width" id="rooms">
    <div class="title">
        <h2>E L I T E</h2>
    </div>
    <div class="rooms-container">
        <!-- Standard Μονόκλινο Δωμάτιο room start-->
        <article class="room" style="min-height: 50vh">
            <div class="room-image">
                <img src="images/img3.jpg" alt="room image">
            </div>
            <div class="room-text">
                <h3>Standard Μονόκλινο Δωμάτιο</h3>
                <ul>
                    <li>
                        <i class="fas fa-arrow-alt-circle-right" style="color: var(--yellow)"></i>
                        <i class="fa-solid fa-person"></i> Max
                    </li>
                    <li>
                        <i class="fas fa-arrow-alt-circle-right" style="color: var(--yellow)"></i>
                        <i class="fa-solid fa-bed"></i> | 1 μονό κρεβάτι
                    </li>
                    <li>
                        <i class="fas fa-arrow-alt-circle-right" style="color: var(--yellow)"></i>
                        <i class="fa-solid fa-shower sub"></i><i class="fa-solid fa-snowflake"></i><i
                            class="fa-solid fa-wifi"></i><i class="fa-solid fa-toilet"></i>
                        <i class="fa-solid fa-wheelchair"></i><i class="fa fa-phone"></i>
                    </li>

                </ul>
                <p class="rate">
                    <span>45.00€/</span> διανυκτέρευση
                </p>
                <button type="button" class="btn">ΚΡΑΤΗΣΗ</button>
            </div>
        </article>
        <!-- end of single room -->
        <!-- single room -->
        <article class="room" style="min-height: 50vh">
            <div class="room-image">
                <img src="images/img2.jpg" alt="room image">
            </div>
            <div class="room-text">
                <h3>Standard Δίκλινο Δωμάτιο </h3>
                <ul>
                    <li>
                        <i class="fas fa-arrow-alt-circle-right" style="color: var(--yellow)"></i>
                        <i class="fa-solid fa-person"></i><i class="fa-solid fa-person"></i> Max
                    </li>
                    <li>
                        <i class="fas fa-arrow-alt-circle-right" style="color: var(--yellow)"></i>
                        <i class="fa-solid fa-bed"></i> | 1 Διπλό ή 2 Μονά Κρεβάτια
                    </li>
                    <li>
                        <i class="fas fa-arrow-alt-circle-right" style="color: var(--yellow)"></i>
                        <i class="fa-solid fa-shower"></i>
                        <i class="fa-solid fa-snowflake"></i>
                        <i class="fa-solid fa-wifi"></i>
                        <i class="fa-solid fa-toilet"></i>
                        <i class="fa-solid fa-wheelchair"></i>
                        <i class="fa fa-phone"></i>
                        <i class="fa-solid fa-tv"></i>
                        <i class="fa-solid fa-couch"></i>
                    </li>
                </ul>
                <p class="rate">
                    <span>60.00€/</span> διανυκτέρευση
                </p>
                <button type="button" class="btn">ΚΡΑΤΗΣΗ</button>
            </div>
        </article>
        <!-- end of single room -->
        <!-- single room -->
        <article class="room" style="min-height: 50vh">
            <div class="room-image">
                <img src="images/img3.jpg" alt="room image">
            </div>
            <div class="room-text">
                <h3>Premium Δίκλινο Δωμάτιο</h3>
                <ul>
                    <li>
                        <i class="fas fa-arrow-alt-circle-right" style="color: var(--yellow)"></i>
                        <i class="fa-solid fa-person"></i><i class="fa-solid fa-person"></i> Max
                    </li>
                    <li>
                        <i class="fas fa-arrow-alt-circle-right" style="color: var(--yellow)"></i>
                        <i class="fa-solid fa-bed"></i> | 1 Διπλό ή 2 Μονά Κρεβάτια
                    </li>
                    <li>
                        <i class="fas fa-arrow-alt-circle-right" style="color: var(--yellow)"></i>
                        <i class="fa-solid fa-shower"></i>
                        <i class="fa-solid fa-snowflake"></i>
                        <i class="fa-solid fa-wifi"></i>
                        <i class="fa-solid fa-toilet"></i>
                        <i class="fa-solid fa-wheelchair"></i>
                        <i class="fa fa-phone"></i>
                        <i class="fa-solid fa-tv"></i>
                        <i class="fa-solid fa-couch"></i>
                        <i class="fa-solid fa-computer"></i>
                        <i class="fa-solid fa-person-swimming"></i>
                        <i class="fa-solid fa-utensils"></i>
                    </li>
                </ul>
                <p class="rate">
                    <span>114.00€ /</span> διανυκτέρευση
                </p>
                <button type="button" class="btn">ΚΡΑΤΗΣΗ</button>
            </div>
        </article>
        <!-- end of single room -->
    </div>
</section>


<!-- TODO 4. Footer start -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>Συντομεύσεις</h3>
            <a href="index.php"> <i class="fas fa-angle-right"></i> Αρχική</a>
            <a href="rooms.html"> <i class="fas fa-angle-right"></i> Δωμάτια</a>
            <a href="booking.php"> <i class="fas fa-angle-right"></i> Κράτηση</a>
            <a href="contact.php"> <i class="fas fa-angle-right"></i> Επικοινωνία</a>
        </div>

        <div class="box fontmine">
            <h3>Επικοινωνία</h3>
            <a href="#"> <i class="fas fa-phone"></i> +211-000-0000 </a> <!--fa-phone sxedio-->
            <a href="#"> <i class="fas fa-envelope"></i> cs161020@uniwa.gr </a>
            <a href="#"> <i class="fas fa-envelope"></i> cs16XXXX@uniwa.gr </a>
        </div>

        <div class="box">
            <h3>Ακολούθησέ Μας!</h3>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
        </div>

    </div>

    <div class="credit" ><span style="text-transform: none;"> created by UniWA |  ΠΑΝΑΓΗΣ ΝΙΚΟΛΑΟΣ cs161142  | ΒΕΛΑΣΚΟ ΠΑΟΛΑ cs161020 </span></div>

</section>

<!-- Footer end -->


<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- σύνδεση με τη javascript   -->
<script src="js/script.js"></script>

</body>
</html>