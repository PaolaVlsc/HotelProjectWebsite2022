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
</head>
<body>

<?php include 'include\header.php'; ?>

<!-- HEADER navbar end -->


<!-- TODO 5. HEADER pictures start -->
<section class="home">

    <div class="swiper home-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide" style="background:url(images/home-slide-2.png) no-repeat">
                <div class="content">
                    <span>ELITE</span>
                    <h3>ΜΙΑ ΑΞΕΧΑΣΤΗ ΕΜΠΕΙΡΙΑ</h3>
                    <!--<a href="package.php" class="btn">discover more</a>-->
                </div>
            </div>

            <div class="swiper-slide slide" style="background:url(images/home-slide-3.png) no-repeat">
                <div class="content">
                    <span>ELITE</span>
                    <h3>ΔΙΑΣΚΕΔΑΣΗ & ΧΑΛΑΡΩΣΗ</h3>
                    <!--<a href="package.php" class="btn">discover more</a>-->
                </div>
            </div>

            <div class="swiper-slide slide" style="background:url(images/home-slide-1.png) no-repeat">
                <div class="content">
                    <span>ELITE</span>
                    <h3>ΦΑΓΗΤΟ & ΜΟΥΣΙΚΗ</h3>
                    <!--<a href="package.php" class="btn">discover more</a>-->
                </div>
            </div>

        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>
</section>

<!--  HEADER pictures end -->


<!--  TODO 4. services homepage start-->

<section class="services">

    <h1 class="heading-title"> ΟΙ ΥΠΗΡΕΣΙΕΣ ΜΑΣ </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/icon-1.png" alt="">
            <h3>Πισίνα</h3>
        </div>

        <div class="box">
            <img src="images/icon-2.png" alt="">
            <h3>Εστιατόριο</h3>
        </div>

        <div class="box">
            <img src="images/icon-3.png" alt="">
            <h3>Μπάρ & Μουσική</h3>
        </div>

        <div class="box">
            <img src="images/icon-4.png" alt="">
            <h3>Χαλάρωση & Σπα</h3>
        </div>

    </div>
</section>

<!-- services homepage end-->


<!-- TODO 7. Map -->
<section class="map">
    <div class="content">
        <h3>Πού βρισκόμαστε;</h3>
        <p>Το ξενοδοχείο "ELITE" βρίσκεται στα... </p>
    </div>

    <div class="map-responsive">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3143.9098616766546!2d23.672607273707733!3d38.002562905129714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14a13ba48d426f81%3A0xbe82f5519cbcb53d!2zzqDOsc69zrXPgM65z4PPhM6uzrzOuc6_IM6Uz4XPhM65zrrOrs-CIM6Rz4TPhM65zrrOrs-C!5e0!3m2!1sel!2sgr!4v1653899011484!5m2!1sel!2sgr"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>
<!-- end of map -->


<!-- TODO 6. About us Homepage start -->
<!--  About us Homepage end -->
<section class="home-about">
    <div class="image">
        <img src="images/about-home.png" alt="">
    </div>

    <div class="content">
        <h3>Λίγα λόγια για το "ELITE"</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita et, recusandae nobis fugit modi quibusdam
            ea assumenda, nulla quisquam repellat rem aliquid sequi maxime sapiente autem ipsum? Nobis, provident
            voluptate?</p>
        <!--<a href="about.php" class="btn">read more</a> -->
    </div>
</section>
<!-- TODO 4. Footer start -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>Συντομεύσεις</h3>
            <a href="index.html"> <i class="fas fa-angle-right"></i> Αρχική</a>
            <a href="rooms.php"> <i class="fas fa-angle-right"></i> Δωμάτια</a>
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

    <div class="credit"><span style="text-transform: none;"> created by UniWA |  ΠΑΝΑΓΗΣ ΝΙΚΟΛΑΟΣ cs161142  | ΒΕΛΑΣΚΟ ΠΑΟΛΑ cs161020 </span>
    </div>

</section>

<!-- Footer end -->


<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- σύνδεση με τη javascript   -->
<script src="js/script.js"></script>

</body>
</html>