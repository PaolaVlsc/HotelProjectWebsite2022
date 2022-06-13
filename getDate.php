<?php
include_once 'include/dbh.inc.php';

$start_date = null;

if(isset($_POST['formDate']))
{
    echo "OKAY";
    $start_date = date('Y-m-d', strtotime($_POST['checkin-date']));
    $end_date = date('Y-m-d', strtotime($_POST['checkout-date']));

    echo $start_date;
    echo $end_date;
}