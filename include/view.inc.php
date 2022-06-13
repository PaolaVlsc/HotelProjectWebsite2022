<?php
if(isset($_GET["viewid"]))
{
    //echo "it works";
    // grab data from the post
    $id=$_GET['viewid'];

    // establish connection - get code
    require_once 'dbh.inc.php';

    $sql = "SELECT * FROM contact_data WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    if($result)
    {
        $row = mysqli_fetch_assoc($result);
        echo $row['message'];
    }
}else{
    header("location: ../requests.php");
    exit();
}