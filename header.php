<?php
$activePage = basename($_SERVER['PHP_SELF'], ".php");
session_start();
?>

<!-- TODO 1. HEADER navbar start -->
<section class="header">
    <div class="logo">
        ELITE
    </div>
    <!-- TODO 2. navigation bar -->
    <nav class="navbar">
        <ul>
            <li><a href="index.php" class="<?= ($activePage == 'index') ? 'active' : ''; ?>">Αρχική</a></li>
            <li>
                <a href="rooms.php" class="<?= ($activePage == 'rooms') ? 'active' : ''; ?>"> Δωμάτια</a></li>
            <?php
            if (isset($_SESSION["username"])) {
//                    $id = $_SESSION["username"];
//                    echo "$id"; ?>

                <li><a href="clientsReservations.php"
                       class="<?= ($activePage == 'clientsReservations') ? 'active' : ''; ?>">Κρατήσεις</a></li>
                <li><a href="requests.php" class="<?= ($activePage == 'requests') ? 'active' : ''; ?>">Αιτήματα</a></li>
                <li><a href="include/logout.inc.php" class="<?= ($activePage == 'logout.inc') ? 'active' : ''; ?>\">Αποσύνδεση</a>
                </li>
            <?php } else { ?>
                <li>
                    <a href="contact.php" class="<?= ($activePage == 'contact') ? 'active' : ''; ?>">Επικοινωνία</a>
                </li>
                <li><a href="booking.php" class="<?= ($activePage == 'booking') ? 'active' : ''; ?>">Κράτηση</a></li>
                <li><a href="login.php" class="<?= ($activePage == 'login') ? 'active' : ''; ?>">Σύνδεση</a></li>

                <?php
            }
            ?>

        </ul>
    </nav>
    <!-- navigation bar end -->

    <!-- TODO 3. menu button (responsive)-->
    <div id="menu-btn" class="fas fa-bars"></div>
    <!--  menu button (responsive) end-->

</section>