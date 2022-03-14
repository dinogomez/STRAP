<?php

require_once 'db/connection.php';
if (session_id() == '') {
    session_start();
}
if (isset($_SESSION['notifications'])) {
    unset($_SESSION['notifications']);
}
$userID = $_SESSION['id'];

$sql = "SELECT * FROM notifications,pets WHERE notifications.userID ='$userID' AND notifications.petID = pets.id AND notifications.isResolved = 'IN PROGRESS'";
$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);


if ($count <= 0) {
    $_SESSION['noNotifications'] = true;
} else {
    $_SESSION['notifications'] = array();

    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        //setting values      
        // $notif = array($row['id'], $row['reports'], $row['petID'], $row['isResolved']);

        array_push($_SESSION['notifications'], $row);
    }
}
