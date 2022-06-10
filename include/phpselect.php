 <?php

$serverName = "localhost";
$dbUserName = "elite_admin";
$dbPassword = "1234";
$dbName = "elite";

// create a connection
$mysqli = mysqli_connect($serverName, $dbUserName, $dbPassword, $dbName);

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
} else {
    $username = $_POST['username'];
    $password = $_POST['pwd'];

    $sql = "SELECT * FROM users_employee WHERE username = '$username' and password = '$password'";
    $res = mysqli_query($mysqli, $sql);

    if ($res) {
        while ($newArray = mysqli_fetch_array($res, MYSQLI_BOTH)) {
            $id = $newArray['id'];
            $item_name = $newArray['username'];
            $item_pwd = $newArray['password'];
            echo "The ID is " . $id .
                " the name is " . $item_name .
                " and the pwd is " . $item_pwd . "<br/>";
        }


        // start a session
        session_start();
        $_SESSION["username"] = $username;
        $_SESSION["password"] = $password;
        header("location: ../index.php");
        exit();

    } else {
        printf("Could not retrieve records: %s\n", mysqli_error($mysqli));
    }

    mysqli_free_result($res);
    mysqli_close($mysqli);
}

