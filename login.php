<!DOCTYPE html>
<!-- === Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <title>Σύνδεση </title>
</head>
<body>

<div class="container">
    <div class="forms">
        <div class="form login">
            <span class="title">Σύνδεση
            </span>

            <form action="#">
                <div class="input-field">
                    <input type="text" placeholder="Όνομα χρήστη" required>
                    <i class="fa-solid fa-user"></i>
                </div>
                <div class="input-field">
                    <input type="password" class="password" placeholder="Κωδικός πρόσβασης" required>
                    <i class="uil uil-lock icon"></i>
                    <i class="uil uil-eye-slash showHidePw"></i>
                </div>

                <div class="input-field button">
                    <input type="submit" value="Login Now">
                </div>
            </form>

            <div class="login-signup">
                    <span class="text">
                        <a href="index.php" class="text signup-link">Επιστροφή στην Αρχική Σελίδα</a>
                    </span>
            </div>
        </div>

        <!-- Registration Form -->

    </div>
</div>

<script src="js/login.js"></script>

</body>
</html>