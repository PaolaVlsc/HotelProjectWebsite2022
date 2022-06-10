<?php

function userExists($conn, $username)
{
    $sql = "SELECT * FROM users_employee WHERE username = ?";

//    // prepared statements
//    $stmt = mysqli_stmt_init($conn);
//
//
//    // if it fails redirect back sto login page
//    if (!mysqli_stmt_prepare($stmt, $sql)) {
//        header("location: ../login.php?error=stmtfailed");
//        exit();
//    }
//
//    mysqli_stmt_bind_param($stmt, "s", $username);
//    mysqli_stmt_execute($stmt);
//    echo "I AM CALLED";
//    // result
//    $resultData = mysqli_stmt_get_result($stmt);

    $result = mysqli_query($conn, "SELECT * FROM users_employee WHERE username = '$username';");

    // an uparxei o user
    if ($row = mysqli_fetch_array($result)) {
        return $row;
    } else {
        return false;
    }

  //  mysqli_stmt_close($stmt);

}

function loginUser($conn, $username, $password)
{
    $uidExists = userExists($conn, $username);

    // an de vrei ton user
    if ($uidExists === false) {
        header("location: ../login.php?error=notfound");
        exit();
    }
    $item_pwd = $uidExists['password'];

    // check the password
//
//    $pwdHashed = $uidExists["password"];
//
//    $checkPwd = password_verify($password, $pwdHashed);

    $checkPwd = false;
    if($item_pwd === $password)
        $checkPwd = true;

    if ($checkPwd === false) {
        header("location: ../login.php?error=wronglogin");
        exit();

    } else {
        // start a session
        session_start();
        $_SESSION["userUsername"] = $uidExists["id"];
        $_SESSION["username"] = $uidExists["username"];
        header("location: ../index.php");
        exit();

    }

}