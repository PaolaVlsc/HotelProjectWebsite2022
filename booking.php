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
    <link rel="stylesheet" href="css/booking.css">
</head>
<body>

<!-- TODO 1 . HEADER start -->
<?php include 'include\header.php'; ?>

<!-- HEADER end -->

<!-- TODO 5. Reviews -->
<!-- reviews section starts  -->

<section class="reviews">

    <h1 class="heading-title"> clients reviews </h1>

    <div class="swiper reviews-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus facilis laudantium magnam saepe magni
                    ullam possimus laborum voluptas, veniam ipsum officiis quae doloribus minima ut quis. Molestiae qui
                    distinctio possimus?</p>
                <h3>john deo</h3>
                <span>traveler</span>
                <img src="images/pic-1.png" alt="">
            </div>

            <div class="swiper-slide slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus repellendus et suscipit optio
                    similique totam aut laborum ullam sequi! In!</p>
                <h3>john deo</h3>
                <span>traveler</span>
                <img src="images/pic-2.png" alt="">
            </div>

            <div class="swiper-slide slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus enim deserunt, ab at ea iste
                    odio placeat doloribus eum dolores tempore obcaecati, dolore esse aperiam. Excepturi ad quo
                    distinctio, dignissimos voluptate, dolores, saepe animi eum atque sint esse ab exercitationem!</p>
                <h3>john deo</h3>
                <span>traveler</span>
                <img src="images/pic-3.png" alt="">
            </div>

            <div class="swiper-slide slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus recusandae cum quibusdam odio
                    dignissimos nemo?</p>
                <h3>john deo</h3>
                <span>traveler</span>
                <img src="images/pic-4.png" alt="">
            </div>

            <div class="swiper-slide slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus facilis laudantium magnam saepe magni
                    ullam possimus laborum voluptas, veniam ipsum officiis quae doloribus minima ut quis. Molestiae qui
                    distinctio possimus?</p>
                <h3>john deo</h3>
                <span>traveler</span>
                <img src="images/pic-5.png" alt="">
            </div>

            <div class="swiper-slide slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus facilis laudantium magnam saepe magni
                    ullam possimus laborum voluptas, veniam ipsum officiis quae doloribus minima ut quis. Molestiae qui
                    distinctio possimus?</p>
                <h3>john deo</h3>
                <span>traveler</span>
                <img src="images/pic-6.png" alt="">
            </div>

        </div>

    </div>

</section>
<!-- Reviews end -->
<!-- TODO 4. Footer start -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>Συντομεύσεις</h3>
            <a href="index.php"> <i class="fas fa-angle-right"></i> Αρχική</a>
            <a href="rooms.php"> <i class="fas fa-angle-right"></i> Δωμάτια</a>
            <a href="booking.html"> <i class="fas fa-angle-right"></i> Κράτηση</a>
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