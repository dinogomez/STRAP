<?php
require_once 'db/connection.php';
$id = $_GET['id'];
$seshID  = $_SESSION['id'];
$status = "ACKNOWLEDGED";
echo $id;

try {
    $sqlImage = "UPDATE notifications, reports SET notifications.isResolved = '$status', reports.isResolved = '$status'
     WHERE notifications.notifID = '$id' AND reports.ID = notifications.reportID";
    $result = mysqli_query($conn, $sqlImage);

    header('Location: /dashboard');
} catch (Exception $e) {
    echo $e->getMs;
}
