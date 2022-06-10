<?php


// connect to database with mysqli_connect - > PREPARED STATEMENT, mySQL , mysqli
$my_sqli = mysqli_connect("localhost", "elite_admin", "1234", "elite");
// check if connected
if (mysqli_connect_errno()) {
    printf("Connection failed: %s\n", mysqli_connect_error);
    exit();
}else {

    $name = htmlspecialchars($_POST['name']);
    $surname = htmlspecialchars($_POST['surname']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    if(!empty($email) && !empty($message)){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){

            $sql = "INSERT INTO contact_data (name, surname, email, phone, message) values ('".$_POST["name"]."','".$_POST["surname"]."','".$_POST["email"]."','".$_POST["phone"]."','".$_POST["message"]."')";

            $res = mysqli_query($my_sqli,$sql);
            if($res == TRUE) {
                echo "Επιτυχής αποστολής μηνύματος";
            }
            else {
                echo "NOT ADDED";
            }

            mysqli_close($my_sqli);
        }else{
            echo "Παρακαλώ εισάγετε έγκυρο email";
        }
    }else{
        echo "Message field cannot be empty";
    }

    // echo "Hello " . $_POST["name"] . " " . $_POST["surname"] . " " . $_POST["email"] . " " . $_POST["phone"] . " " . $_POST["message"];
}
