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
<section class="box">
    <?php
    if (isset($_SESSION['status'])) {
        ?>

        <div class="alert">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            <h2>
                <?php echo $_SESSION['status']; ?>
            </h2>
        </div>
        <?php
        unset($_SESSION['status']);
        unset($_SESSION['room']);
        unset($_SESSION['startCheckIn']);
        unset($_SESSION['startCheckOut']);
    }
    ?>
</section>


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
        <p>Το ξενοδοχείο "ELITE" βρίσκεται στο κέντρο της Αθήνας, μόλις 800μ. από το μετρό, αλλά και από την Ακρόπολη. </p>
    </div>

    <div class="map-responsive">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1572.5715483189047!2d23.73085935822413!3d37.973789709296646!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14a1bd3d94a023a7%3A0x3f7f63839babd06!2sNavarchou%20Nikodimou%2018-20%2C%20Athina%20105%2057!5e0!3m2!1sen!2sgr!4v1655136740309!5m2!1sen!2sgr"
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
        <h3>Επισκέπτεστε την Αθήνα για διακοπές ή δουλειά;</h3>
        <p style="font-size: 19px; text-align: justify;
  text-justify: inter-word;">
            Αναζητάτε μερικές στιγμές ηρεμίας και χαλάρωσης ή θέλετε να γυρίσετε όλα τα ιστορικά σημεία της πόλης;
            Εάν ναι, μπορείτε να είστε σίγουροι ότι το Elite Hotel θα γίνει το αγαπημένο σας ξενοδοχείο!
            Βρίσκεται στο κέντρο της Αθήνας, μόλις 800μ. από το μετρό, αλλά και από την Ακρόπολη.
            Φτάνοντας στην ρεσεψιόν συναντάτε τη χαμογελαστή και φιλική διάθεση των υπαλλήλων που σας εξυπηρετούν. Μονόκλινο, δίκλινο ή σουίτα, με θέα στη
            ακρόπολη ή στην πισίνα, το δωμάτιό σας διαθέτει μοντέρνα διακόσμηση, μινιμάλ επίπλωση και όλα τα απαραίτητα για μια άνετη διαμονή.
            Διατίθεται δωρεάν πρωινό στον χώρο του breakfast, ο οποίος βρίσκεται στο Roof Garden με θέα την υπέροχη Αθήνα. Όταν ο καιρός το επιτρέπει η απόλαυση του καφέ
            ή του ποτού μεταφέρεται έξω, στην πισίνα όπου μπορείτε να χαλαρώσετε στις αναπαυστικές μας ξαπλώστρες ή να δροσιστείτε κάνοντας μια βουτία.
            Καλωσήρθατε στο Elite Hotel, κλείστε τώρα την διαμονή σας στον ξενοδοχείο μας και ζήστε μια μοναδική εμπειρία φιλοξενείας</p>
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