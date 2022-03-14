<?php

require_once 'db/connection.php';
if (session_id() == '') {
    session_start();
}


$id =  mysqli_real_escape_string($conn, $_GET['id']);
$update = $conn->prepare("DELETE FROM activity_logs WHERE id = ?");
$update->bind_param('i', $id);
$update->execute();
$update->close();
header('Location: /logs');
