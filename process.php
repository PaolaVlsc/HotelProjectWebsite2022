<?php
// connect to database with mysqli_connect - > PREPARED STATEMENT, mySQL , mysqli
$my_sqli = mysqli_connect("localhost", "uniwa", "1234", "elite");

// check if connected
if (mysqli_connect_errno()) {
    printf("Connection failed: %s\n", mysqli_connect_error);
    exit();
}else {
    $sql = "INSERT INTO contact_data (name, surname, email, phone, message) values ('".$_POST["name"]."','".$_POST["surname"]."','".$_POST["email"]."','".$_POST["phone"]."','".$_POST["message"]."')";

    $res = mysqli_query($my_sqli,$sql);
    if($res == TRUE) {
        echo "NEO";
    }
    else {
        echo "NOT ADDED";
    }

    mysqli_close($my_sqli);

    // echo "Hello " . $_POST["name"] . " " . $_POST["surname"] . " " . $_POST["email"] . " " . $_POST["phone"] . " " . $_POST["message"];
}
?>