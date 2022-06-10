<?php

function userExists($conn, $username){
    $sql = "SELECT * FROM users_employee WHERE username = ?;";

    // prepared statements
    $stmt = mysqli_stmt_init($conn);


    // if it fails redirect back sto login page
    if(!mysqli_stmt_prepare($stmt, $sql))
    {
        header("location: ../login.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt,"ss", $username, $password);
    mysqli_stmt_execute($stmt);

    // result
    $resultData = mysqli_stmt_get_result($stmt);

    // an uparxei o user
    if($row = mysql_fetch_assoc($resultData)){
        return $row;
    }else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);

}
function loginUser($conn,$username,$pwd){
    $uidExists = uidExists($conn,$username);

    // an de vrei ton user
    if($uidExists === false)
    {
        header("location: ../login.php?error=wronglogin");
    }

    // check the password

    $pwdHashed = $uidExists["password"];

    $checkPwd = password_verify("$pwd", $pwdHashed);
    if($checkPwd === false)
    {
        header("location: ../login.php?error=wronglogin");
        exit();
    }
    else if ($checkPwd === true)
    {
        // start a session
        session_start();
        $_SESSION["userID"] = $uidExists["id"];
        $_SESSION["userID"] = $uidExists["username"];
        header("location: ../index.php");
        exit();
    }

}