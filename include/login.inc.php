<?php

if(isset($_POST["submit"]))
{
    echo "it works";
    // grab data from the post

    $username = $_POST["name"];
    $password = $_POST["pwd"];

    // establish connection - get code
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    // function
    loginUser($conn, $username, $password);
}else{
    header("location: ../login.php");
    exit();
}