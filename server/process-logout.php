<?php
require_once 'db/connection.php';

require 'process-log.php';
$event = "LOGOUT";
$type = "USER";
$userID = $_SESSION['id'];
activityLog($userID, $event, $type, $conn);
if (session_id() == '') {
    session_start();
}
$_SESSION = array();
session_destroy();
header("Location: /");
